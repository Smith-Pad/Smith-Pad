<!----------------------------------------------------------------
    system.topic.list.php

    This file is used to include the UI components to show in 
    the Smith-Pad Web Interface


    This file is used to display list of Topics in a particular 
    subject

    This is commented to ensure debugging, changing parameters
    regarding subject lists. 
---------------------------------------------------------------->



<div class="FOIL-Layouts">

        <!-- 
                Initialize topic list for index.php [Main Menu]

                [index.php]

        -->
                <?php global $MATH_MENU_TOPIC_LIST_Math_1_1; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_1_2; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_1_3; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_1_4; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_1_5; ?>


                <?php global $MATH_MENU_TOPIC_LIST_Math_2_1; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_2_2; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_2_3; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_2_4; ?>     



                <?php global $MATH_MENU_TOPIC_LIST_Math_3_1; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_3_2; ?>
                <?php global $MATH_MENU_TOPIC_LIST_Math_3_3; ?>                


        <!-- 
                Display topic lists for Math-Menu

                [Math/Math-Menu.php]

        -->        
        
                <?php print $MATH_MENU_TOPIC_LIST_Math_1_1; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_1_2; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_1_3; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_1_4; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_1_5; ?>



                <?php print $MATH_MENU_TOPIC_LIST_Math_2_1; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_2_2; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_2_3; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_2_4; ?>     
                
                
                <?php print $MATH_MENU_TOPIC_LIST_Math_3_1; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_3_2; ?>
                <?php print $MATH_MENU_TOPIC_LIST_Math_3_3; ?>
</div>




        <!-- 
                Initialize topic list for index.php [Main Menu]

                [index.php]

        -->
                <?php global $MATH_MENU_POPUP_TOPIC_LIST_Math_1_1; ?>
                <?php global $MATH_MENU_POPUP_TOPIC_LIST_Math_1_2; ?>
        <!-- 
                Display popup topic lists for Math-Menu

                [Math/Math-Menu.php]

        --> 

                <?php print $MATH_MENU_POPUP_TOPIC_LIST_Math_1_1; ?>
                <?php print $MATH_MENU_POPUP_TOPIC_LIST_Math_1_2; ?>
