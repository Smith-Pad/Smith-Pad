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
		print('<FOIL-font-size-20> <div id="time_service"></div>');
                print('<script src="src/FOIL-time.js"></script>');
		print('<h1> Name</h1>');
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
		print('</div>');
	}

	beginFontStyles();
	banner();
	naviButtons();
	content();

?>
