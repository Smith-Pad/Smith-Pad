<!--
        System-Settings


-->


<?php 

function includeUI() {
        print('<link rel="stylesheet" href="./src/FOIL-UI.css" type="text/css">');
        print('<link rel="stylesheet" href="./src/config.css" type="text/css">');
}

function banner() {
        print('<div class="FOIL-font-styles sans-serif">');
        print('<div class="FOIL-navigation-bar-regular">');
        print('<h1> System Settings </h1>');               
        print('</div>');                                                                                                        // Banner Name
        print('</div>');
}


/**
 * This gives the user the option to customize the screen resolution to their liking.
 * This function is based on the `xrandr` tool. It also gives the user the option
 * to set the display brightness. 
 */

function displayOptions() {
        print('<div class="FOIL-font-styles sans-serif">');
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>Display Options</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');
        print('<FOIL-Font-Size-30>Rotation</FOIL-Font-Size-30>');
        include('../src/avakasaya/space2.php');
        print('<a href="Screen-Resolution/normal.php" class="FOIL-button-regular-no-shadow">Normal</a>');                       // Make the screen normal
        print('<a href="Screen-Resolution/inverted.php" class="FOIL-button-regular-no-shadow">Flipped</a>');                    // Make the screen flipped
        print('<a href="Screen-Resolution/left.php" class="FOIL-button-regular-no-shadow">Portrait (Left)</a>');                // Make the screen portrait
        print('<a href="Screen-Resolution/right.php" class="FOIL-button-regular-no-shadow">Portrait (Right)</a>');              // Make the screen portrait        
        include('../src/avakasaya/space4.php');
        print('<FOIL-Font-Size-30>Display Brightness</FOIL-Font-Size-30>');
        include('../src/avakasaya/space2.php');
        print('<a href="Display-Brightness/10-percent.php" class="FOIL-button-regular-no-shadow">10</a>');		        // Set Display Brightness to 10%
        print('<a href="Display-Brightness/20-percent.php" class="FOIL-button-regular-no-shadow">20</a>');		        // Set Display Brightness to 20%
        print('<a href="Display-Brightness/30-percent.php" class="FOIL-button-regular-no-shadow">30</a>');		        // Set Display Brightness to 30%
        include('../src/avakasaya/space2.php');
        print('<a href="Display-Brightness/40-percent.php" class="FOIL-button-regular-no-shadow">40</a>');		        // Set Display Brightness to 40%
        print('<a href="Display-Brightness/50-percent.php" class="FOIL-button-regular-no-shadow">50</a>');		        // Set Display Brightness to 50%
        print('<a href="Display-Brightness/60-percent.php" class="FOIL-button-regular-no-shadow">60</a>');		        // Set Display Brightness to 60%
        include('../src/avakasaya/space2.php');
        print('<a href="Display-Brightness/70-percent.php" class="FOIL-button-regular-no-shadow">70</a>');		        // Set Display Brightness to 70%
        print('<a href="Display-Brightness/80-percent.php" class="FOIL-button-regular-no-shadow">80</a>');		        // Set Display Brightness to 80%
        print('<a href="Display-Brightness/90-percent.php" class="FOIL-button-regular-no-shadow">90</a>');		        // Set Display Brightness to 90%
        include('../src/avakasaya/space2.php');
        print('<a href="Display-Brightness/100-percent.php" class="FOIL-button-regular-no-shadow">100</a>');		        // Set Display Brightness to 100%
        print('</div>');
        print('</div>');
}


/**
 * As a result, users may easily switch between dark and bright UI colors.
 * in the Smith-Pad-OS-Shell environment. 
 * 
 */

function uiSettings() {
        print('<div class="FOIL-font-styles sans-serif">');
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>UI Settings</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');
        // print('<a href="UI-Settings/light-mode.php" class="FOIL-button-regular-no-shadow">Light Mode</a>');                  // Change to Light Mode
        // print('<a href="UI-Settings/dark-mode.php" class="FOIL-button-regular-no-shadow">Dark Mode</a>');                    // Change to Dark Mode
        print('</div>');
        print('</div>');
}


/**
 * As a result, users have the ability to update packages, upgrade packages, 
 * and so on using the Pacman Package Manager as the backend. However, when 
 * the user presses the "update", "upgrade", "Clear Package Cache" 
 * or "List Packages
 * 
 * 
 * It requires an system adminstrator, or supervisor to enter the superuser 
 * password before proceeding to "update", "upgrade", "Clear Package Cache"
 * or "List Packages"
 * 
 * It will also allow users to update the Smith-Pad-OS-Web-Interface. 
 * In the backend, it makes use of the [git pull] command. 
 */

function packageManager() {
        print('<div class="FOIL-font-styles sans-serif">');
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>Software Management</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');

        // Update Packages
        print('<a href="Package-Management-Scripts/update-packages.php" class="FOIL-button-regular-no-shadow">Update</a>');

        // Clear Package Cache
        print('<a href="Package-Management-Scripts/clear-package-cache.php" class="FOIL-button-regular-no-shadow">Clear Package Cache</a>');   
        
        // List Packages 
        print('<a href="Package-Management-Scripts/list-packages.php" class="FOIL-button-regular-no-shadow">List Packages</a>');


        // Update Smith-Pad Web Interface
        print('<a href="Update-Interface/index.php" class="FOIL-button-regular-no-shadow">Update Shell</a>');
        print('</div>');
        print('</div>');
}

includeUI();
banner();
displayOptions();
uiSettings();
packageManager();

?>
