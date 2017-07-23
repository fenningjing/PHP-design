<?php
//HelloCone.php
class HelloClone
{
	private $buildInConstructor;
	public function __construct()
	{
		echo "hello, clone <br/>";
		$this->buildInConstructor = "Construct creation";
	}

	public function doWork()
	{
		echo $this->buildInConstructor . "<br/>";
		echo "I'm doing the work! <br/>";
	}
}

$original = new HelloClone();
$original->doWork();
//克隆不会启动构造函数
$cloneIt = clone $original;
$cloneIt->doWork();