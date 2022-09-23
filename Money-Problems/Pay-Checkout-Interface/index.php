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
                print('<FOIL-font-size-20> <div id="time_service"></div>');
                print('<script src="src/FOIL-time.js"></script>');
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
		print('<a href="../index.php" class="FOIL-button-small-no-shadow">Home</a>');
		print('<a href="#" class="FOIL-button-small-no-shadow">Previous</a>');
		print('<a href="1.php" class="FOIL-button-small-no-shadow">Next</a>');
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
		print('<FOIL-font-size-31> <center> Welcome to the Lesson </center> </FOIL-font-size-31>');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<center> <b> Welcome to this interactive lesson where you will explore a grocery store and learn how to use the pay checkout </b></center>');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<div class="FOIL-layout-regular-no-shadow">');
		print('<p> <center> Ready to Continue?  </p> </h1>');
		print('</div>');
		print('<center><a href="1.php" class="FOIL-button-regular-no-shadow">Yes</a>
		<a href="../index.php" class="FOIL-button-regular-no-shadow">No</a></center>');
		print('</div>');
		print('</div>');
	}

	beginFontStyles();
	banner();
	naviButtons();
	content();

?>
