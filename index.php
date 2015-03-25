<?php

define('ROOT_PATH', __DIR__.'/');

echo ROOT_PATH;

var_dump($_SERVER);

class UserController {
	
	public function index() {
		echo 1;
	}
}
