<!--
        System-Settings


-->


<?php 

function includeUI() {
        print('<link rel="stylesheet" href="/../src/layouts.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/Custom_Tags.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/position-text.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/UI.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/FOIL-Bar.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/FOIL-UI.css" type="text/css">'); 
        print('<link rel="stylesheet" href="../../src/config.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/animation.css" type="text/css">');
}

function banner() {
        print('<div class="FOIL-navigation-bar-regular">');
        print('<h1> System Settings </h1>');                                                            // Banner Name
        print('<a href="../index.php" class="FOIL-button-small">Back</a>');                             // Go back to the Home Menu
        print('</div>');
}


/**
 * This gives the user the option to customize the screen resolution to their liking.
 * This function is based on the `xrandr` tool.
 *
 */

function screenResolution() {
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>Screen Resolution</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');
        print('<FOIL-Font-Size-30>Rotation</FOIL-Font-Size-30>');
        print('<a href="Screen-Resolution/normal.php" class="FOIL-button-regular">Normal</a>');                 // Make the screen normal
        print('<a href="Screen-Resolution/inverted.php" class="FOIL-button-regular">Flipped</a>');              // Make the screen flipped
        print('<a href="Screen-Resolution/left.php" class="FOIL-button-regular">Portrait (Left)</a>');          // Make the screen portrait
        print('<a href="Screen-Resolution/right.php" class="FOIL-button-regular">Portrait (Right)</a>');        // Make the screen portrait
        print('</div>');
}


/**
 * As a result, users may easily switch between dark and bright UI colors.
 * in the Smith-Pad-OS-Shell environment. 
 * 
 */

function uiSettings() {
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>UI Settings</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');
        print('<a href="UI-Settings/light-mode.php" class="FOIL-button-regular">Light Mode</a>');                // Change to Light Mode
        print('<a href="UI-Settings/dark-mode.php" class="FOIL-button-regular">Dark Mode</a>');                  // Change to Dark Mode
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
 */

function packageManager() {
        print('<div class="FOIL-layout-regular">');
        print('<FOIL-Font-Size-60>Software Management</FOIL-Font-Size-60>');
        include('../src/avakasaya/space4.php');

        // Update Packages
        print('<a href="Package-Management-Scripts/update-packages.php" class="FOIL-button-regular">Update</a>');

        // Clear Package Cache
        print('<a href="Package-Management-Scripts/clear-package-cache.php" class="FOIL-button-regular">Clear Package Cache</a>');   
        
        // List Packages 
        print('<a href="Package-Management-Scripts/list-packages.php" class="FOIL-button-regular">List Packages</a>');

        print('</div>');
}

includeUI();
banner();
screenResolution();
uiSettings();
packageManager();

?>
