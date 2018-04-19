<?php
class game {
	protected $numControllers = 2;
	public $numGames = 5;

	public function getNumControllers(): int {
		return($this->numControllers);
	}

	public function getNumGames(): bool {
		return($this->numGames);
	}
}