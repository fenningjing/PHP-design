<?php
function __autoload($class_name)
{
	include $class_name . '.php';
}

class Client
{
	private $basicSite;

	public function __construct()
	{
		$this->basicSite = new basicSite();
		$this->basicSite = $this->wrapComponent($this->basicSite);

		$siteShow = $this->basicSite->getSite();
		$format = "<br/>&nbsp;&nbsp;<strong>Total = $";
		$price = $this->basicSite->getPrice();

		echo $siteShow . $format .$price . "</strong><p/>";
	}

	private function wrapComponent(IComponent $component)
	{
		
		
		$component = new DataBase($component);
		$component = new Video($component);
		//$component = new Maintenance($component);

		return $component;
	}
}

$worker = new Client();