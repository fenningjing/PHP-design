<?php
//装饰器与者
abstract class Decorator extends IComponent
{
	//继承 getSite() 和 getPrice() 
	//这仍是一个抽象类
	//这里不需要实现任何一个抽象方法
	//任务是维护Component的引用
	//public function getSite();
	//public function getPrice();
}