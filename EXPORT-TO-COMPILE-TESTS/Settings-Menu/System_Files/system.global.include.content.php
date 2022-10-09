<?php
function content() {

        /** 
         * For-loop. 
         * 
         * 
         * 
         * How to adjust the number of layouts 
         * 
         * On the [$layout <= NUMBER OF LAYOUTS], that's where you provide 
         * the number of layouts to adjust. 
         */
        for ($layout = 0; $layout <= 5; $layout +=10) {
                print('<div class="FOIL-layout-regular-no-shadow">');   
        }


        print('<center> <FOIL-font-size-60> <div id="time_service"></div> </FOIL-font-size-60> </center>');
        print('<script src="src/FOIL-time.js"></script>');
        print('<center><FOIL-font-size-40> Settings Menu </FOIL-font-size-40></center>');
        print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
        print('<a href="Bluetooth/index.php" class="FOIL-button-regular-no-shadow">Bluetooth</a>');
        print('<a href="Wi-Fi/index.php" class="FOIL-button-regular-no-shadow">Wi-Fi</a>');
        print('<a href="Language/index.php" class="FOIL-button-regular-no-shadow">Language</a>');
        print('<a href="Display/index.php" class="FOIL-button-regular-no-shadow">Display</a>');
        print('<a href="About/index.php" class="FOIL-button-regular-no-shadow">About</a>');
}
content();
?>
