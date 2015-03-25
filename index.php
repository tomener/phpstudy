<?php

define('ROOT_PATH', __DIR__.'/');

echo ROOT_PATH;

var_dump($_SERVER);

class UserController {
	
	private $storage;

	public function index() {
		$this->storage = 100;
	}
}
