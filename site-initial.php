<?php
session_start();
if(!empty($_SESSION["userSession"])) {
	$userSession=$_SESSION["userSession"];
}
?>