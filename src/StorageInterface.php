<?php

namespace Csrf;

interface StorageInterface {

	public function set($key, $value);

	public function get($key);
}
