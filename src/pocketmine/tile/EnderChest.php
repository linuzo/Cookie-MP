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

namespace pocketmine\tile;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\StringTag;
class EnderChest extends Spawnable implements Nameable {
    public function getName(): string {
        return isset($this->namedtag->CustomName) ? $this->namedtag->CustomName->getValue() : "Ender Chest";
    }
    public function hasName() {
        return isset($this->namedtag->CustomName);
    }
    public function setName($str) {
        if ($str === "") {
            unset($this->namedtag->CustomName);
            return;
        }
        $this->namedtag->CustomName = new StringTag("CustomName", $str);
    }
    public function getSpawnCompound() {
        $enderchest = new CompoundTag("", [
            new StringTag("id", Tile::ENDER_CHEST),
            new IntTag("x", (int)$this->x),
            new IntTag("y", (int)$this->y),
            new IntTag("z", (int)$this->z)
        ]);
        if ($this->hasName()) {
            $enderchest->CustomName = $this->namedtag->CustomName;
        }
        return $enderchest;
    }
}