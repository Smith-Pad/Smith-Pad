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
        
        /**
         * If the user clicks on the Clock-Mode, it will display the user the Clock-Mode. 
         */
        print('<a href="../../Applications/Clock-Mode/index.php" class="FOIL-button-regular-no-shadow">Clock Mode</a>');


        /**
         * If the user clicks on more applications, it will display list of applications for 
         * users to open. 
         */
}
content();
?>