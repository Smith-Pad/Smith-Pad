<!----------------------------------------------------------------
    UI-Settings

    Ability to change the color scheme to light or dark 
    by a touch of a button. 
---------------------------------------------------------------->
<link rel="stylesheet" href="../../src/UI.css" type="text/css" />
<link rel="stylesheet" href="../../src/FOIL-UI.css" type="text/css" />
<link rel="stylesheet" href="../../src/FOIL-Bar.css" type="text/css" />
<link rel="stylesheet" href="../../src/index.css" type="text/css" />
<link rel="stylesheet" href="../../src/layouts.css" type="text/css" />
<link rel="stylesheet" href="../../src/position-text.css" type="text/css" />
<link rel="stylesheet" href="../../src/animation.css" type="text/css" />
<link rel="stylesheet" href="../../src/config.css" type="text/css" />


<?php 

// Make a function that Displays the banner as well as allowing the user 
// to go back to the home screen using a button

function banner() {
        print('<div class="FOIL-Navigation-Bar">');
        print('<h1>UI Settings</h1>');
        print('<a href="../../index.php" class="FOIL-button-small">back</a>');
        print('</div>');
}

function bannerBackButton() {
        
}

function buttonLists() {
        print('<a href="./Scripts/dark-mode.php" class="FOIL-button">Dark Mode</a>');
        print('<a href="./Scripts/light-mode.php" class="FOIL-button">Light Mode</a>');
        print('<a href="./Scripts/default.php" class="FOIL-button">Default</a>');
}

banner();
bannerBackButton();
buttonLists();
?>


