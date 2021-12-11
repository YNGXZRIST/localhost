<?php

namespace App\Operation;

class Settings
{
	protected $isBeforeActionsEnabled = true;
	protected $isAfterActionsEnabled = true;

	public function disableBeforeSaveActions(): self
	{
		$this->isBeforeActionsEnabled = false;

		return $this;
	}


	public function disableAfterSaveActions(): self
	{
		$this->isAfterActionsEnabled = false;

		return $this;
	}


function isBeforeActionsEnabled(): bool
{
	return $this->isBeforeActionsEnabled;
}
function isAfterActionEnabled():bool
{
	return $this->isAfterActionsEnabled;
}
}