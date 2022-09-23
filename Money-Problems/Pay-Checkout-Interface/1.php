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
		print('<a href="index.php" class="FOIL-button-small-no-shadow">Home</a>');
		print('<a href="index.php" class="FOIL-button-small-no-shadow">Previous</a>');
		print('<a href="2.php" class="FOIL-button-small-no-shadow">Next</a>');
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
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<center><FOIL-font-size-51> Welcome to the Grocery Store. </FOIL-font-size-51>');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<center><FOIL-font-size-25>My name is (character), and I am going to show you the way to pay at the checkout </FOIL-font-size-25></center> ');
		print('</div>');
		print('</div>');
		print('</div>');
		print('</div>');
		print('</div>');
		print('</div>');
		print('</div>');
		print('</div>');
	}

	beginFontStyles();
	banner();
	naviButtons();
	content();

?>
