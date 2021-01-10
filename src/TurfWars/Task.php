<?php

namespace TurfWars;

use pocketmine\scheduler\Task;
use pocketmine\Server; 
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\tile\Sign;
use pocketmine\utils\TextFormat;

class Task extends Task {

	public function __construct(Main $plugin) {
		// parent::__construct($plugin);
		$this->plugin = $plugin;

	}

	public function onRun(int $currentTick) {
		$this->plugin->Second();
	}

}
