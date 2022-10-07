<?php
function content() {
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<center> <FOIL-font-size-60> Language </FOIL-font-size-60> </center>');

        // If the user presses Home, it will go back to the Settings Menu
        print('<a align="right" href="../index.php" class="FOIL-button-regular-no-shadow">Home</a>');

        // If the user presses chinese, it will set the shell to chinese.
	print('<center> <a href="Chinese.lang/chinese.php class="FOIL-button-regular-no-shadow">Chinese</a></center>');


        // If the user presses german, it will set the shell to german.
	print('<center> <a href="German.lang/german.php" class="FOIL-button-regular-no-shadow">German</a></center>');


        // If the user presses japanese, it will set the shell to japanese.
	print('<center> <a href="Japanese.lang/japanese.php" class="FOIL-button-regular-no-shadow">Japanese</a></center>');


        // If the user presses Spanish, it will set the shell to spanish
        print('<center> <a href="Spanish.lang/spanish.php" class="FOIL-button-regular-no-shadow">Spanish</a></center>');

        
        print('</div>');
        print('</div>');
        print('</div>');
        print('</div>');
        print('</div>');
}
content();
?>
