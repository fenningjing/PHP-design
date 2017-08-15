<?php

class GraphicProduct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "<img src='pix/bg-body1.jpg'>";
		return $this->mfgProduct;
	}
}