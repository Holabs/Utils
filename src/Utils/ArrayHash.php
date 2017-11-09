<?php


namespace Holabs\Utils;

use Nette\Utils\ArrayHash as NetteArrayHash;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/utils
 * @copyright    Copyright © 2017, Tomáš Holan [www.tomasholan.eu]
 */
class ArrayHash extends NetteArrayHash {

	/**
	 * Returns a item.
	 * @param int|string $key
	 * @return mixed
	 */
	public function offsetGetExists($key){
		return $this->offsetExists($key) ? $this->offsetGet($key) : NULL;
	}

}