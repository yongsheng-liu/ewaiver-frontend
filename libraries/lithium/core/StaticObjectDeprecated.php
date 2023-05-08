<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2009, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\core;

use lithium\core\Libraries;
use lithium\aop\Filters;
use lithium\analysis\Inspector;

/**
 * Provides a base class for all static classes in the Lithium framework. Similar to its
 * counterpart, the `Object` class, `StaticObject` defines some utility useful for testing purposes.
 *
 * @deprecated
 * @see lithium\core\Object
 */
class StaticObjectDeprecated {

	/**
	 * Keeps a cached list of each class' inheritance tree.
	 *
	 * @deprecated
	 * @var array
	 */
	protected static $_parents = [];

	/**
	 * Stores the closures that represent the method filters. They are indexed by called class.
	 *
	 * @deprecated Not used anymore.
	 * @var array Method filters, indexed by `get_called_class()`.
	 */
	protected static $_methodFilters = [];

	/**
	 * Determines if a given method can be called.
	 *
	 * @deprecated
	 * @param string $method Name of the method.
	 * @param boolean $internal Provide `true` to perform check from inside the
	 *                class/object. When `false` checks also for public visibility;
	 *                defaults to `false`.
	 * @return boolean Returns `true` if the method can be called, `false` otherwise.
	 */
	public static function respondsTo($method, $internal = false) {
		$message  = '`' . __METHOD__ . '()` has been deprecated. ';
		$message .= "Use `is_callable('<class>::<method>')` instead.";
		trigger_error($message, E_USER_DEPRECATED);

		return Inspector::isCallable(get_called_class(), $method, $internal);
	}

	/**
	 * Calls a method on this object with the given parameters. Provides an OO wrapper for
	 * `forward_static_call_array()`, and improves performance by using straight method calls
	 * in most cases.
	 *
	 * @deprecated
	 * @param string $method Name of the method to call.
	 * @param array $params Parameter list to use when calling `$method`.
	 * @return mixed Returns the result of the method call.
	 */
	public static function invokeMethod($method, $params = []) {
		$message  = '`' . __METHOD__ . '()` has been deprecated.';
		trigger_error($message, E_USER_DEPRECATED);

		switch (count($params)) {
			case 0:
				return static::$method();
			case 1:
				return static::$method($params[0]);
			case 2:
				return static::$method($params[0], $params[1]);
			case 3:
				return static::$method($params[0], $params[1], $params[2]);
			case 4:
				return static::$method($params[0], $params[1], $params[2], $params[3]);
			case 5:
				return static::$method($params[0], $params[1], $params[2], $params[3], $params[4]);
			default:
				return forward_static_call_array([get_called_class(), $method], $params);
		}
	}

	/**
	 * Returns an instance of a class with given `config`. The `name` could be a key from the
	 * `classes` array, a fully namespaced class name, or an object. Typically this method is used
	 * in `_init` to create the dependencies used in the current class.
	 *
	 * @deprecated
	 * @param string|object $name A `classes` key or fully-namespaced class name.
	 * @param array $options The configuration passed to the constructor.
	 * @return object
	 */
	protected static function _instance($name, array $options = []) {
		$message  = '`' . __METHOD__ . '()` has been deprecated. ';
		$message .= 'Please use Libraries::instance(), with the 4th parameter instead.';
		trigger_error($message, E_USER_DEPRECATED);
		return Libraries::instance(null, $name, $options, static::$_classes);
	}

	/**
	 * Exit immediately. Primarily used for overrides during testing.
	 *
	 * @deprecated
	 * @param integer|string $status integer range 0 to 254, string printed on exit
	 * @return void
	 */
	protected static function _stop($status = 0) {
		$message  = '`' . __METHOD__ . '()` has been deprecated.';
		trigger_error($message, E_USER_DEPRECATED);
		exit($status);
	}

	/**
	 * Gets and caches an array of the parent methods of a class.
	 *
	 * @deprecated
	 * @return array Returns an array of parent classes for the current class.
	 */
	protected static function _parents() {
		$message  = '`' . __METHOD__ . '()` has been deprecated. For property merging ';
		$message .= 'use `\lithium\core\MergeInheritable::_inherit()`';
		trigger_error($message, E_USER_DEPRECATED);

		$class = get_called_class();

		if (!isset(self::$_parents[$class])) {
			static::$_parents[$class] = class_parents($class);
		}
		return static::$_parents[$class];
	}

	/**
	 * Apply a closure to a method of the current static object.
	 *
	 * @deprecated Replaced by `\lithium\aop\Filters::apply()` and `::clear()`.
	 * @see lithium\core\StaticObject::_filter()
	 * @see lithium\util\collection\Filters
	 * @param mixed $method The name of the method to apply the closure to. Can either be a single
	 *        method name as a string, or an array of method names. Can also be false to remove
	 *        all filters on the current object.
	 * @param \Closure $filter The closure that is used to filter the method(s), can also be false
	 *        to remove all the current filters for the given method.
	 * @return void
	 */
	public static function applyFilter($method, $filter = null) {
		$message  = '`' . __METHOD__ . '()` has been deprecated in favor of ';
		$message .= '`\lithium\aop\Filters::apply()` and `::clear()`.';
		trigger_error($message, E_USER_DEPRECATED);

		$class = get_called_class();

		if ($method === false) {
			Filters::clear($class);
			return;
		}
		foreach ((array) $method as $m) {
			if ($filter === false) {
				Filters::clear($class, $m);
			} else {
				Filters::apply($class, $m, $filter);
			}
		}
	}

	/**
	 * Executes a set of filters against a method by taking a method's main implementation as a
	 * callback, and iteratively wrapping the filters around it.
	 *
	 * @deprecated Replaced by `\lithium\aop\Filters::run()`.
	 * @see lithium\util\collection\Filters
	 * @param string $method The name of the method being executed.
	 * @param array $params An associative array containing all the parameters passed into
	 *        the method.
	 * @param \Closure $callback The method's implementation, wrapped in a closure.
	 * @param array $filters Additional filters to apply to the method for this call only.
	 * @return mixed
	 */
	protected static function _filter($method, $params, $callback, $filters = []) {
		$message  = '`' . __METHOD__ . '()` has been deprecated in favor of ';
		$message .= '`\lithium\aop\Filters::run()` and `::apply()`.';
		trigger_error($message, E_USER_DEPRECATED);

		if (strpos($method, '::') !== false) {
			list($class, $method) = explode('::' , $method);
		} else {
			$class = get_called_class();
		}

		foreach ($filters as $filter) {
			Filters::apply($class, $method, $filter);
		}
		return Filters::run($class, $method, $params, $callback);
	}
}

?>