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
        print('<center><FOIL-font-size-40> Display Resolution </FOIL-font-size-40></center>');
        print('</div>');
        print('</div>');
        print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
        // If the user presses Rotate, user will be able to rotate the screen based on their 
        // preference. 
        print('<a href="Rotate/index.php" class="FOIL-button-regular-no-shadow">Rotate</a>');
        print('</div>');
        print('</div>');
}
content();
?>
