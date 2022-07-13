<?php
function includeUI() {
	include './include-UI/<topic-number>.php';
}
function customizeUI() {
	include './Customize-UI/<topic-number>.php';	
}
function navigationBar() {
	include './Navigation-Bar/<topic-number>.php';	
}
navigationBar();
customizeUI();
includeUI();
?>
