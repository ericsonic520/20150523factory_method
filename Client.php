<?php
//Client.php
/* Factory method
 * 設計模式的真正價值不是提升速度，而是提升開發速度 
 */
include_once 'GraphicFactory.php';
include_once 'TextFactory.php';
class Client
{
	private $someGraphicObject;
	private $someTextObjext;
	
	public function __construct()
	{
		$this->someGraphicObject = new GraphicFactory();
		echo $this->someGraphicObject->startFactory()."<br />";
		$this->someTextObjext = new TextFactory();
		echo $this->someTextObjext->startFactory()."<br />";
	}
}
$worker = new Client();
?>
