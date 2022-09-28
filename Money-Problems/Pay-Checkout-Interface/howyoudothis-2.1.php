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
		print('<a href="howyoudothis-2.php" class="FOIL-button-small-no-shadow">Back</a>');
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
  		print('<h1> how do you do it?</h1>');
  		include('src/avakasaya/space9.php');
		include('Content/How-do-you-do-this/howyoudothis-2.1.content');
                // If the user presses this button, it will allow the user the ability to learn 
                // how to figure out the total amount of grocceries in their shopping cart
                print('<a href="How-do-you-do-this/howyoudothis-2.1.php" class="FOIL-button-regular-no-shadow">How you do do it? </a>');
	}

	beginFontStyles();
	banner();
	naviButtons();
	content();

?>
