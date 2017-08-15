<?php
class TextProduct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "sdfsdfsdfsdfsdf";
		return $this->mfgProduct;
	}
}