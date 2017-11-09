<?php


namespace Holabs\Utils;

use Nette\Utils\ArrayList as NetteArrayList;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      holabs/utils
 * @copyright    Copyright © 2017, Tomáš Holan [www.tomasholan.eu]
 */
class ArrayList extends NetteArrayList {

	/**
	 * Returns a item.
	 * @param int $index
	 * @return mixed
	 */
	public function offsetGetExists($index){
		return $this->offsetExists($index) ? $this->offsetGet($index) : NULL;
	}

}