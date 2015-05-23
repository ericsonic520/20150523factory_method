<?php
//GraphicProduct.php
include_once 'Product.php';
class GraphicProduct implements Product
{
	private $mfgProduct;
	public function getProperties(){
		$this->mfgProduct="<!doctype html><head><meta charset='UTF-8' />";
		$this->mfgProduct.="<title>My Pigeon</title>";
		$this->mfgProduct.="</head><body>";
		$this->mfgProduct.="<img src='image/1.jpg' width='500' height='500' />";
		$this->mfgProduct.="</body></html>";
		return $this->mfgProduct;
	}
}
?>
