<?php

/*
 *  _____   ______   ______   _  _   _   ______      __  __ ____
 * |  _ _| |  __  | |  __  | | |/ / |_| |  ____|    |  \/  |  _ \
 * | |     | |  | | | |  | | |   /   _  | |___  ___ | |\/| | |_) |
 * | |     | |  | | | |  | | |  (   | | |  ___||___|| |  | |  __/
 * | |_ _  | |__| | | |__| | |   \  | | | |____     | |  | | |
 * |_____| |______| |______| |_|\_\ |_| |______|    |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
*/

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;

class Bedrock extends Solid{

	protected $id = self::BEDROCK;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getName(){
		return "Bedrock";
	}

	public function getHardness(){
		return 0,8;
	}

	public function getResistance(){
		return 4;
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

}