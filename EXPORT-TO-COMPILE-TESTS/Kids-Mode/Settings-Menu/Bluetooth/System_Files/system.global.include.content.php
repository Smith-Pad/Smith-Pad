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
        print('<center><FOIL-font-size-40> Bluetooth </FOIL-font-size-40></center>');
        print('</div>');
        print('</div>');
        print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
        // If the user presses english, instead it will use git stash -u to reset the changes.
        print('<a href="reset-language.php" class="FOIL-button-regular-no-shadow">English</a>');
        // If the user pressses german, it will override the shell using the python/php script.
        print('<a href="german.php" class="FOIL-button-regular-no-shadow">German</a>');
        // If the user pressses japanese, it will override the shell using the python/php script.
        print('<a href="japanese.php" class="FOIL-button-regular-no-shadow">Japanese</a>');
        // If the user pressses chinese, it will override the shell using the python/php script.
        print('<a href="chinese.php" class="FOIL-button-regular-no-shadow">Chinese</a>');
        print('</div>');
        print('</div>');
}
content();
?>
