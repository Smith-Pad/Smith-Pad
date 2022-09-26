<?php
        $includeUI = include('System_Files/system.global.include.ui.php');

	/**
	 *	This is where you are able to configure the
	 * 	font styles of your choice.
	 *
	 *	Please see the FOIL-UI Documentation for more
	 * 	information.
	 *
	 */

        function beginFontStyles() {
		print('<div class="FOIL-font-styles sans-serif">');
        }


        /**
         *	This is where the banner is located. In other
         *	words, the banner name.
         *
         *
         */

	function banner() {
		print('<div class="FOIL-navigation-bar-regular">');
		print('<h1> Pay Checkout</h1>');
	}


	/**
	 *	This is where the navigation buttons are located.
	 *
	 *	For example:
	 * 	if [index.php] then [index.php] to [1.php].
	 * 	if [1.php] the [1.php] to [2.php]
	 *
	 */

	function naviButtons() {
		print('<hr>');
		print('<a href="2.php" class="FOIL-button-small-no-shadow">Close</a>');
		print('</div>');
	}


	/**
	 *	This is where the content is located.
	 *
	 *
	 *
	 *	Put anything that is necessary
	 *
	 *
	 */

	function content() {
  		print('<div class="FOIL-layout-regular-no-shadow">');
  		print('<h1> how do you do it?</h1>');
  		print('<div class="FOIL-layout-regular-no-shadow">');
  		print('<FOIL-font-size-71>W</FOIL-font-size-71>hen you are in a grocery store, you know, buying some ingredients for your ');  		
  		print('wonderful and glory of rice and curry. ');
	}

	beginFontStyles();
	banner();
	naviButtons();
	content();

?>
