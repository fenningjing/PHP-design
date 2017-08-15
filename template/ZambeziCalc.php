<?php
class ZambeziCalc extends IHook
{
	protected function addTax()
	{
		$this->fullCost = $this->purchased;
	}

	//用来确定是否需要运费  这就是钩子
	protected function addShippingHook()
	{
		if (! $this->hookSpecial)
		{
			$this->fullCost += 12.95;
		}
	}

	protected function displayCost()
	{
		echo "Your full cost is $this->fullCost";
	}
}