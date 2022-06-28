<!----------------------------------------------------------------
    system.subjects.header.bar.php

    This file is used to include the UI components to show in 
    the Smith-Pad Web Interface


    This file is used to display header bars for different 
    parameters for every file. 

    This is commented to ensure debugging, changing parameters
    of Header Bars for a specific file. 
---------------------------------------------------------------->

<div class="FOIL-Navigation-Bar">

        <!-- 
                Initialize Header Bar for index.php [Main Menu]

                [index.php]

        -->
                <?php global $MAIN_MENU_HEADER_BAR; ?>
                <?php print $MAIN_MENU_HEADER_BAR; ?>




        <!-- 
                Display Header Bar for Math-Menu

                [Math/Math-Menu.php]

        -->
        <?php global $MATH_MENU_HEADER_BAR; ?>
        <?php print $MATH_MENU_HEADER_BAR; ?>



        <!-- 
                Display Header Bar for Reading-Menu

                [Reading/Reading-Menu.php]

        -->
        <?php global $READING_MENU_HEADER_BAR; ?>
        <?php print $READING_MENU_HEADER_BAR; ?>


        
</div>