<?php
//TextProduct.php
include_once 'Product.php';
class TextProduct implements Product
{
	private $mfgProduct;
	public function getProperties(){
		$this->mfgProduct="原鴿在鳥類中屬中等體型，通體石板灰色，頸部胸部的羽毛具有悅目的金屬光澤，常隨觀察角度的變化而顯由綠到藍而紫的顏色變化，翼上及尾端各自具一條黑色橫紋，尾部的黑色橫紋較寬，尾上覆羽白色。一般而言，結群活動和盤旋飛行是其行為特點，但據1928年的研究，棲息在喜馬拉雅山脈地區的野鴿飛行迅速而且常延直線飛行，一般離開地面不高。

分辨雌雄一般是辨別大小，雄鴿的肩膀寬，頭形圓大，腳也較長，脊椎也較長，相反的雌鴿都較短。此外，雄鴿的頸子粗短，頸羽富有金色光澤，叫聲也較強，步伐大，求偶時會一邊旋轉，或是一邊跳躍；雌鴿的頸子細，叫聲也較輕柔。.";
		return $this->mfgProduct;
	}
}
?>
