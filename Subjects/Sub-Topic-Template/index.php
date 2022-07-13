<?php
function includeUI() {
	print('<link rel="stylesheet" href="./src/layouts.css" type="text/css" />');
	print('<link rel="stylesheet" href="./src/position-text.css" type="text/css" />');
	print('<link rel="stylesheet" href="./src/UI.css" type="text/css" />');
	print('<link rel="stylesheet" href="./index.css" type="text/css" />');
	print('<link rel="stylesheet" href="./background.css" type="text/css" />');
	
}

function customizePage() {
	print
	(
		'
			<style>
			  body {
			    overflow: none;
			    /* Turns off Scrolling :hidden */
			    color: white;
			    background: #37474F;
			    background: var(--main-color-18);
			  }
			</style>

		'
	);
}

includeUI();
customizePage();

?>
