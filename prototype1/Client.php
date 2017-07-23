<?php
function __autoload($class_name)
{
	include $class_name . ".php";
}

class Client
{
	private $market;
	private $manage;
	private $engineer;

	public function __construct()
	{
		$this->makeConProto();

		$Tess = clone $this->market;
		$this->setEmployee($Tess,"Tess Smith",101,"ts101-1234","test.png");
		$this->showEmployee($Tess);
	}

	private function makeConProto()
	{
		$this->market = new Marketing();
		$this->manage = new Management();
		$this->engineer = new Engineering(); 
	}
	private function showEmployee(IAcmePrototype $employeeNow)
	{
		$px = $employeeNow->getPic();
		echo $px . "<br/>";
		echo $employeeNow->getName() . "<br/>";
		echo $employeeNow->getDept() . ":" . $employeeNow::UNIT ."<br/>";
		echo $employeeNow->getID() . "<br/>";
	}

	private function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px)
	{
		$employeeNow->setName($nm);
		$employeeNow->setDept($dp);
		$employeeNow->setID($id);
		$employeeNow->setPic("pix/$px");
	}
}
$worker = new Client();