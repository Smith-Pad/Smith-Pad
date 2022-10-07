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
        print('<center><FOIL-font-size-40> Daily Skills</FOIL-font-size-40></center>');
        print('<a href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');
}
content();
?>
