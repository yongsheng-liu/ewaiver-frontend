<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2009, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\cases\core;

use lithium\aop\Filters;
use lithium\tests\mocks\core\MockRequest;
use lithium\tests\mocks\core\MockMethodFiltering;
use lithium\tests\mocks\core\MockExposed;
use lithium\tests\mocks\core\MockCallable;
use lithium\tests\mocks\core\MockObjectDeprecatedForParents;
use lithium\tests\mocks\core\MockObjectDeprecatedConfiguration;
use lithium\tests\mocks\core\MockInstantiator;

/**
 * @deprecated
 */
class ObjectDeprecatedTest extends \lithium\test\Unit {

	protected $_backup = null;

	public function setUp() {
		error_reporting(($this->_backup = error_reporting()) & ~E_USER_DEPRECATED);
	}

	public function tearDown() {
		error_reporting($this->_backup);
	}

	/**
	 * Test configuration handling
	 */
	public function testObjectConfiguration() {
		$expected = ['testScalar' => 'default', 'testArray' => ['default']];
		$config = new MockObjectDeprecatedConfiguration();
		$this->assertEqual($expected, $config->getConfig());

		$config = new MockObjectDeprecatedConfiguration(['autoConfig' => ['testInvalid']]);
		$this->assertEqual($expected, $config->getConfig());

		$expected = ['testScalar' => 'override', 'testArray' => ['default', 'override']];
		$config = new MockObjectDeprecatedConfiguration(['autoConfig' => [
			'testScalar', 'testArray' => 'merge'
		]] + $expected);
		$this->assertEqual($expected, $config->getConfig());
	}

	/* Deprecated / BC */

	public function testRespondsTo() {
		$obj = new MockRequest();
		$this->assertTrue($this->respondsTo('get'));
		$this->assertFalse($this->respondsTo('fooBarBaz'));
	}

	public function testRespondsToProtectedMethod() {
		$obj = new MockRequest();
		$this->assertFalse($obj->respondsTo('_parents'));
		$this->assertTrue($obj->respondsTo('_parents', 1));
	}

	public function testParents() {
		$expected = ['lithium\core\ObjectDeprecated' => 'lithium\core\ObjectDeprecated'];

		$result = MockObjectDeprecatedForParents::parents();
		$this->assertEqual($expected, $result);

		$result = MockObjectDeprecatedForParents::parents();
		$this->assertEqual($expected, $result);
	}

	/**
	 * Tests that an object can be instantiated using the magic `__set_state()` method.
	 *
	 * @deprecated
	 */
	public function testStateBasedInstantiation() {
		$result = MockObjectDeprecatedConfiguration::__set_state([
			'key' => 'value', '_protected' => 'test'
		]);
		$expected = 'lithium\tests\mocks\core\MockObjectDeprecatedConfiguration';
		$this->assertEqual($expected, get_class($result));

		$this->assertEqual('test', $result->getProtected());
	}

	public function testMethodFiltering() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$test = new MockMethodFiltering();
		$result = $test->method(['Starting test']);
		$expected = [
			'Starting test',
			'Starting outer method call',
			'Inside method implementation',
			'Ending outer method call'
		];
		$this->assertEqual($expected, $result);

		$test->applyFilter('method', function($self, $params, $chain) {
			$params['data'][] = 'Starting filter';
			$result = $chain->next($self, $params, $chain);
			$result[] = 'Ending filter';
			return $result;
		});

		$result = $test->method(['Starting test']);
		$expected = [
			'Starting test',
			'Starting outer method call',
			'Starting filter',
			'Inside method implementation',
			'Ending filter',
			'Ending outer method call'
		];
		$this->assertEqual($expected, $result);

		$test->applyFilter('method', function($self, $params, $chain) {
			$params['data'][] = 'Starting inner filter';
			$result = $chain->next($self, $params, $chain);
			$result[] = 'Ending inner filter';
			return $result;
		});
		$result = $test->method(['Starting test']);
		$expected = [
			'Starting test',
			'Starting outer method call',
			'Starting filter',
			'Starting inner filter',
			'Inside method implementation',
			'Ending inner filter',
			'Ending filter',
			'Ending outer method call'
		];
		$this->assertEqual($expected, $result);

		Filters::clear('lithium\tests\mocks\core\MockMethodFiltering');
		error_reporting($original);
	}

	/**
	 * Verifies workaround for accessing protected properties in filtered methods.
	 */
	public function testFilteringWithProtectedAccess() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$object = new MockExposed();
		$this->assertEqual($object->get(), 'secret');
		$this->assertTrue($object->tamper());
		$this->assertEqual($object->get(), 'tampered');

		error_reporting($original);
	}

	/**
	 * Attaches a single filter to multiple methods.
	 */
	public function testMultipleMethodFiltering() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$object = new MockMethodFiltering();

		$count = 0;
		$object->applyFilter(['method', 'method2'], function($s, $p, $c) use (&$count) {
			$count++;
			return $c->next($s, $p, $c);
		});
		$object->method(['foo' => 'bar']);
		$object->method2();

		$this->assertIdentical(2, $count);

		Filters::clear('lithium\tests\mocks\core\MockMethodFiltering');
		error_reporting($original);
	}

	public function testResetMethodFilter() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$obj = new MockMethodFiltering();
		$obj->applyFilter(false);
		$obj->applyFilter('method2', function($self, $params, $chain) {
			return false;
		});

		$this->assertFalse($obj->method2());

		$obj->applyFilter('method2', false);

		$this->assertNotIdentical($obj->method2(), false);

		Filters::clear('lithium\tests\mocks\core\MockMethodFiltering');
		error_reporting($original);
	}

	public function testResetMultipleFilters() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$obj = new MockMethodFiltering();
		$obj->applyFilter(false);
		$obj->applyFilter(['method2', 'manual'], function($self, $params, $chain) {
			return false;
		});

		$this->assertFalse($obj->method2());
		$this->assertFalse($obj->manual([]));

		$obj->applyFilter('method2', false);

		$this->assertNotIdentical($obj->method2(), false);
		$this->assertFalse($obj->manual([]));

		Filters::clear('lithium\tests\mocks\core\MockMethodFiltering');
		error_reporting($original);
	}

	public function testResetClass() {
		error_reporting(($original = error_reporting()) & ~E_USER_DEPRECATED);

		$obj = new MockMethodFiltering();
		$obj->applyFilter(false);
		$obj->applyFilter(['method2', 'manual'], function($self, $params, $chain) {
			return false;
		});

		$this->assertFalse($obj->method2());
		$this->assertFalse($obj->manual([]));

		$obj->applyFilter(false);

		$this->assertNotIdentical($obj->method2(), false);
		$this->assertNotIdentical($obj->manual([]), false);

		Filters::clear('lithium\tests\mocks\core\MockMethodFiltering');
		error_reporting($original);
	}

	/**
	 * Tests that the correct parameters are always passed in Object::invokeMethod(), regardless of
	 * the number.
	 *
	 * @deprecated
	 */
	public function testMethodInvocationWithParameters() {
		$callable = new MockCallable();

		$result = $callable->invokeMethod('foo');
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], []);

		$expected = ['bar'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['one', 'two'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['short', 'parameter', 'list'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['a', 'longer', 'parameter', 'list'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['a', 'much', 'longer', 'parameter', 'list'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['an', 'extremely', 'long', 'list', 'of', 'parameters'];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);

		$expected = ['an', 'extremely', 'long', 'list', 'of', 'parameters'];
		$result = $callable->invokeMethod('bar', $expected);
		$this->assertEqual($result['method'], 'bar');
		$this->assertEqual($result['params'], $expected);

		$expected = [
			'if', 'you', 'have', 'a', 'parameter', 'list', 'this',
			'long', 'then', 'UR', 'DOIN', 'IT', 'RONG'
		];
		$result = $callable->invokeMethod('foo', $expected);
		$this->assertEqual($result['method'], 'foo');
		$this->assertEqual($result['params'], $expected);
	}

	public function testInstanceWithClassesKey() {
		$object = new MockInstantiator();
		$expected = 'lithium\tests\mocks\core\MockRequest';
		$result = get_class($object->instance('request'));
		$this->assertEqual($expected, $result);
	}

	public function testInstanceWithNamespacedClass() {
		$object = new MockInstantiator();
		$expected = 'lithium\tests\mocks\core\MockRequest';
		$result = get_class($object->instance('lithium\tests\mocks\core\MockRequest'));
		$this->assertEqual($expected, $result);
	}

	public function testInstanceWithObject() {
		$object = new MockInstantiator();
		$request = new MockRequest();
		$expected = 'lithium\tests\mocks\core\MockRequest';
		$result = get_class($object->instance($request));
		$this->assertEqual($expected, $result);
	}

	public function testInstanceFalse() {
		$object = new MockInstantiator();
		$this->assertException('/^Invalid class lookup/', function() use ($object) {
			$object->instance(false);
		});
	}
}

?>