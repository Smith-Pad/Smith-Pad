<?php
function content() {
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<center> <FOIL-font-size-60> <div id="time_service"></div> </FOIL-font-size-60> </center>');
        print('<script src="src/FOIL-time.js"></script>');
        print('</div>');
        print('<center><FOIL-font-size-40> Display </FOIL-font-size-40></center>');
        print('</div>');
        print('</div>');
        print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
        // If the user presses display resolution, user will be able to select settings for 
        // display resolution.


        print('<a href="Display-Resolution/index.php" class="FOIL-button-regular-no-shadow">Display-Resolution</a>');
        // If the user presses dark mode, user will able to see dark mode colors on UI
        print('<a href="dark-mode.php" class="FOIL-button-regular-no-shadow">UI TO DARK COLORS</a>');

        // If the user presses display brightness, user will be able to select display brightness
        //print('<a href="Display-Brightness/index.php" class="FOIL-button-regular-no-shadow">Display Brightness</a>');
        print('<a href="Display-Brightness/index.php" class="FOIL-button-regular-no-shadow">Display Brightness[EXTERNAL]</a>');

        print('</div>');
        print('</div>');
}
content();
?>
