<?php

function __autoload($class_name)
{
	include $class_name . '.php';
}
class Client3
{
	private $buyTotal;
	private $gpsNow;
	private $mapNow;
	private $boatNow;
	private $special;
	private $zamCalc;

	function __construct()
	{
		$this->setHTML();
		$this->setCost();
		$this->zamCalc = new ZambeziCalc();
		$this->zamCalc->templateMethod($this->buyTotal,$this->special);
	}

	private function setHTML()
	{
		$this->gpsNow = 100;
		$this->mapNow = array(50,600);
		$this->boatNow = 100;
	}
	private function setCost()
	{
		$this->buyTotal = $this->gpsNow;
		foreach ($this->mapNow as  $value) {
			$this->buyTotal+= $value;
		}
		$this->special = ($this->buyTotal >= 200);
		$this->buyTotal += $this->boatNow;
	}
}

$worker = new Client3();