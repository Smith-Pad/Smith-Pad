<!--
        Packages-List-Output


-->


<?php 

function includeUI() {
        print('<link rel="stylesheet" href="/../src/layouts.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/Custom_Tags.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/position-text.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/UI.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/FOIL-Bar.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/FOIL-UI.css" type="text/css">'); 
        print('<link rel="stylesheet" href="../../../src/config.css" type="text/css">');
        print('<link rel="stylesheet" href="../../../src/animation.css" type="text/css">');
}

function banner() {
        print('<div class="FOIL-Navigation-Bar color-is-red">');
        print('<h1> Packages List </h1>');                                                                      // Banner Name
        print('<a href="../../index.php" class="FOIL-button-small">Back</a>');                                  // Go back to the Home Menu
        print('</div>');
}


/**
 * This gives the user the ability to see listed packages that are needed 
 * to be upgraded. 
 * 
 * It also gives the user the ability to see packages that are installed 
 * in the system.
 *
 */

function NEEDED_UPGRADE_PACKAGE_LIST() {
        print('<div class="FOIL-Layout color-is-black">');
        print('<FOIL-Font-Size-60>Packages List</FOIL-Font-Size-60>');
        include('../../src/avakasaya/space2.php');
        print('<FOIL-Font-Size-30>Needed for Upgrade</FOIL-Font-Size-30>');
        include('../../src/avakasaya/space4.php');
        print('<pre>');
        include('list-packages-upgrade-output');
        print('</pre>');
        print('</div>');
}


function INSTALLED_PACKAGE_LIST() {
        print('<div class="FOIL-Layout color-is-black">');
        print('<FOIL-Font-Size-60>Packages List</FOIL-Font-Size-60>');
        include('../../src/avakasaya/space2.php');
        print('<FOIL-Font-Size-30>Already Installed or Just Installed </FOIL-Font-Size-30>');
        include('../../src/avakasaya/space4.php');
        print('<pre>');
        include('installed-packages-list');
        print('</pre>');
        print('</div>');
}


includeUI();
banner();
NEEDED_UPGRADE_PACKAGE_LIST();
INSTALLED_PACKAGE_LIST();

?>