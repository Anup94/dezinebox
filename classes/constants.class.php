<?php
require_once($_SERVER['DOCUMENT_ROOT']."/classes/constants/usertypes.class.php");
class constClass {
	function constClass()
	{
		$this->userTypeId=new userTypeId();
	}
}
?>