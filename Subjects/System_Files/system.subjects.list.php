<!----------------------------------------------------------------
    system.subjects.list.php

    This file is used to include the UI components to show in 
    the Smith-Pad Web Interface


    This file is used to display list of Subjects

    This is commented to ensure debugging, changing parameters
    regarding subject lists. 
---------------------------------------------------------------->



<div class="FOIL-Layouts">

        <!-- 
                Initialize subjects List for index.php [Main Menu]

                [index.php]

        -->
                <?php global $MAIN_MENU_SUBJECTS_LIST_Math; ?>
                <?php global $MAIN_MENU_SUBJECTS_LIST_Reading; ?>
                <?php global $MAIN_MENU_SUBJECTS_LIST_Science; ?>



        <!-- 
                Display subjects list for index.php [Main Menu]

                [Math/Math-Menu.php]

        -->        
        
                
                <?php print $MAIN_MENU_SUBJECTS_LIST_Math; ?>
                <?php print $MAIN_MENU_SUBJECTS_LIST_Reading; ?>
                <?php print $MAIN_MENU_SUBJECTS_LIST_Science; ?>
</div>