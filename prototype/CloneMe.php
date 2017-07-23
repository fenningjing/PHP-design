<?php
//CloneMe.php
abstract class CloneMe
{
	public $name;
	public $picture;
	abstract function __clone();
}

class Person extends CloneMe
{
	public function __construct()
	{
		$this->picture = "cloneMan.png";
		$this->name = "Tom";
	}

	public function display()
	{
		echo $this->picture . "<br/>";
		echo $this->name . "<br/>";
	}

	function __clone() {}

}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
