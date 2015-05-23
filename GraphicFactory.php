<?php
//GraphicFactory.php
include_once('Creator.php');
include_once('GraphicProduct.php');
Class GraphicFactory extends Creator
{
	protected function factoryMethod()
	{
		$product = new GraphicProduct();
		return($product->getProperties());
	}
}
?>
