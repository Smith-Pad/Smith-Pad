<meta http-equiv="Refresh" content="2; URL=../../index.php">


<!-- Style the splashscreen --> 

<style> 

        body {
                background-color: black;
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
        print('<center> <h1> Smith-Pad Interface has been successfully updated </h1></center>');
}

splashscreen();
?>