<?php 

function includeUI() {
	include './Include-UI/index.php';
}


function customizeUI() {
	include './Customize-UI/index.php';
}


function navigationButtons() {
	include './Navigation-Buttons/index.php';
}


includeUI();
customizeUI();
navigationButtons();
?>
