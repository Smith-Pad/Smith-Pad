<?php
function includeUI() {
	print('<link rel="stylesheet" href="./src/layouts.css" type="text/css" />');
	print('<link rel="stylesheet" href="./src/position-text.css" type="text/css" />');
	print('<link rel="stylesheet" href="./src/UI.css" type="text/css" />');
	print('<link rel="stylesheet" href="./index.css" type="text/css" />');
	print('<link rel="stylesheet" href="./background.css" type="text/css" />');
	
}

function navigationButtons() {
	include './Navigation-Buttons/1.php';	
}

includeUI();
navigationButtons();
customizePage();

?>
