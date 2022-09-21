<?php

        /**
         * Subjects Interface
         *
         * 
         * 
         * Description: Later on.... 
         */
        $includeUI = include('System_Files/system.subjects.include.ui.php');
        $beginComponents = print('<div class="FOIL-font-styles sans-serif">');

        // Make a function called banner to display the banner
        function banner() {
                print('<div class="FOIL-navigation-bar-regular">');
                print('<h1> Reading </h1>');
                print('</div>');
        }

        function naviButtons() {
                print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
                print('<a href="../Daily-Skills/index.php" class="FOIL-button-regular-no-shadow">Daily Skills</a>');
                print('<a href="../Work-Skills/index.php" class="FOIL-button-regular-no-shadow">Work skills</a>');
                print('<a href="../Math/index.php" class="FOIL-button-regular-no-shadow">Math</a>');
                print('<a href="#" class="FOIL-button-regular-no-shadow">Reading</a>');
        }

        function displayContent() {
                print('<div class="FOIL-layout-regular-no-shadow">');
                print('<center><h1> Reading </h1></center>');
		print('<center> <a href="#" class="FOIL-button-regular-no-shadow">1</a></center>');
                print('</div>');
        }
        banner();   
        naviButtons();
        displayContent();
?>
