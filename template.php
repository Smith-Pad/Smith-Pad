<?php
function includeUI() {
	include './Include-UI/template.php';
}
function customizeUI() {
	include './Customize-UI/template.php';	
}
function navigationBar() {
	include './Navigation-Bar/template.php';	
}
includeUI();
customizeUI();
navigationBar();
?>
