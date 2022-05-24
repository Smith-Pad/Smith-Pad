<link rel="stylesheet" href="./src/layouts.css" type="text/css">
<link rel="stylesheet" href="./src/Custom_Tags.css" type="text/css">
<link rel="stylesheet" href="./src/position-text.css" type="text/css">
<link rel="stylesheet" href="./src/UI.css" type="text/css">
<link rel="stylesheet" href="./src/FOIL-Bar.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<p id="text">


    <!-- Layout-->
    <!-- First the Layout takes place-->
    <div class="layout indicator-side-round">

        <h1> Smith Pad </h1>
      

    </div>



    <?php include 'src/avakasaya/space21.php'?>
    

    <div class="layout side-round">
        <fontsize70>



        </fontsize70>
        <fontsize60>Menu</fontsize60>


        <?php include 'src/avakasaya/space2.php'?>
   
        <a href="#settings" class="button">Settings</a>
        <a href="schedule-display.php" class="button">Schedule Display</a>
        <a href="Math-Operations.php" class="button">Math Operations</a>
        <a href="./Subjects/Subjects.php" class="button">Subjects</a>
        <a href="./APPS/clock.php" class="button">Clock Mode</a>

        

        <?php include 'src/avakasaya/space7.php'?>
        <a href="#" class="button"onClick="Calculator=window.open( './APPS/Calculator/index.php','Calculator', 'width=600,height=1000'); return false;">Calculator</a>
        




        <settings>
            <div id="settings" class="activate">
                <div class="settings">
                    <h1>Settings </h1>
                 
                    <a class="settingsclose" href="#">&times;</a>
                    
        
                    <h4> Power Options</h4>
                    <a href="./Power/reboot.php" class="button-no-animate-mode button curve button small button orange">Restart</a>
                
                    
                  
                    <a href="./Power/shutdown.php" class="button-no-animate-mode button curve button small button orange">Shutdown</a>
                    <h4> Software Update </h4> 

                    <a href="./Update-Tool/index.php" class="button-no-animate-mode button curve button small button orange">Update Smith Pad</a>
                    
                    <?php include 'src/avakasaya/space3.php'?>
                        </div>
    
                </div>
            </div>

    </div>
</p>
