<?php

function __autoload($class_name)
{
	include $class_name.'.php';
}

class Client1 
{
	function __construct()
	{
		$mo = new TmFac();
		$mo->templateMethod();
	}
}
$worker  = new Client1();