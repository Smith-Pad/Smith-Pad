<!----------------------------------------------------------------
    light-mode.php

    Ability to change the color scheme to light 
    by a touch of a button. 
---------------------------------------------------------------->

<?php exec('sh light-mode.sh'); ?>
<meta http-equiv="Refresh" content="2; URL=../index.php">


<!-- Style the splashscreen --> 

<style> 
        body {
                background-color: rgb(122, 122, 122);
        }


        h1 {
                animation-name: splashscreen;
                animation-duration: 1s;
                color: white;
                font-size: 80px;
                padding: 200px;
        }

        @keyframes splashscreen {
                from {
                        font-size: 0px;
                }                

                to {
                        font-size: 80px;
                }
        }

</style>


<?php
function splashscreen() {
        print('<center> <h1> Light Mode Activated </h1></center>');
}

splashscreen();
?>