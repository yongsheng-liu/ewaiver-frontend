<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2011, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\cases\storage\session\strategy;

use lithium\storage\session\strategy\Encrypt;
use lithium\tests\mocks\storage\session\strategy\MockCookieSession;

class EncryptTest extends \lithium\test\Unit {

	public $mock = 'lithium\tests\mocks\storage\session\strategy\MockCookieSession';

	public function skip() {
		$this->skipIf(!Encrypt::enabled(), 'The `Encrypt` strategy is not enabled.');
		$this->skipIf(!extension_loaded('openssl'), '`openssl` extension not loaded.');
	}

	public function setUp() {
		MockCookieSession::reset();
	}

	public function testConstructException() {
		$this->assertException('/Encrypt strategy requires a secret key./', function() {
			new Encrypt();
		});
	}

	public function testEnabled() {
		$this->assertTrue(Encrypt::enabled());
	}

	public function testConstruct() {
		$encrypt = new Encrypt(['secret' => str_repeat('a', 32)]);
		$this->assertInstanceOf('lithium\storage\session\strategy\Encrypt', $encrypt);
	}

	public function testReadWriteSymmetry() {
		$encrypt = new Encrypt(['secret' => str_repeat('a', 32)]);

		$encrypted = $encrypt->write('foo', ['class' => $this->mock, 'key' => 'fookey']);
		$decrypted = $encrypt->read($encrypted, ['class' => $this->mock, 'key' => 'fookey']);

		$this->assertEqual('foo', $decrypted);
	}

	/* Deprecated / BC */

	public function testMigrateExistingFromMcryptToOpenssl() {
		$this->skipIf(!extension_loaded('mcrypt'), '`mcrypt` extension not loaded.');

		error_reporting(($this->_backup = error_reporting()) & ~E_DEPRECATED & ~E_USER_DEPRECATED);

		$new = new Encrypt(['secret' => str_repeat('a', 32)]);
		$old = new Encrypt([
			'secret' => str_repeat('a', 32),
			'cipher' => MCRYPT_RIJNDAEL_128,
			'mode' => MCRYPT_MODE_CBC
		]);

		$key = 'fookey';
		$value = 'barvalue';

		$encrypted = $old->write($value, ['class' => $this->mock, 'key' => $key]);
		$decrypted = $new->read($encrypted, ['class' => $this->mock, 'key' => $key]);
		$this->assertEqual($value, $decrypted);

		unset($old);
		error_reporting($this->_backup);
	}
}

?>