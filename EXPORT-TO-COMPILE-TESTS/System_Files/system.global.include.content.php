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
        for ($layout = 0; $layout <= 2; $layout +=5) {
                print('<div class="FOIL-layout-regular-no-shadow">');   
        } 

        print('<center> <FOIL-font-size-60> <div id="time_service"></div> </FOIL-font-size-60> </center>');
        print('<script src="src/FOIL-time.js"></script>');
        print('<center><FOIL-font-size-40> Menu </FOIL-font-size-40></center>');
        print('<a href="Settings-Menu/index.php" class="FOIL-button-regular-no-shadow">Settings</a>');
        print('<a href="#" class="FOIL-button-regular-no-shadow">Schedule Display</a>');
        print('<a href="#" class="FOIL-button-regular-no-shadow">Math Operations</a>');
        print('<a href="Subjects/index.php" class="FOIL-button-regular-no-shadow">Subjects</a>');
        print('<a href="Applications/Clock/index.php" class="FOIL-button-regular-no-shadow">Clock Mode</a>');
}
content();
?>