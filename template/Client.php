<?php

function __autoload($class_name)
{
	include $class_name.'.php';
}

class Client 
{
	function __construct()
	{
		$caption = "Modigliani paited elongated face.";
		$mo = new ConcreteClass();
		$mo->templateMethod("bg-body1.jpg",$caption);
	}
}
$worker  = new Client();