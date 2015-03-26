<?php

/**
 * @version 1.0
 * @author tomener
 * @package Index
 * @since 2015-03-25
 * @license New BSD License.{@link http://www.opensource.org/licenses/bsd-license.php}
 * @link http://blog.sina.com.cn/tomener
 * @copyright Copyright (c) 2015 Tomener Software Studio
 */

define('ROOT_PATH', __DIR__.'/');

echo ROOT_PATH;

var_dump($_SERVER);

class UserController {
	
	private $storage;

	public function index() {
		$this->storage = 100;
	}
}
