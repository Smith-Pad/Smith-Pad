<?php 

function includeUI() {
	include '/Include-UI/1.php';
}


function customizeUI() {
	include './Customize-UI/1.php';
}


function navigationButtons() {
	include './Navigation-Buttons/1.php';
}


includeUI();
customizeUI();
navigationButtons();
?>
