<!----------------------------------------------------------------
    system.home.screen.foil.bar.settings.panel.php

    Used to display a foil bar panel that contains the settings 
    menu in the home screen. 
---------------------------------------------------------------->



<settings>
            <div id="settings" class="activate">
                <div class="settings">
                 	<h2> Settings Panel </h2>
                    	<a class="settingsclose" href="#">&times;</a>
                    
        
                    	<h4> Power Options</h4>
                    	<a href="./Power/reboot.php" class="button-no-animate-mode button curve button small button orange">Restart</a>
                    	<a href="./Power/shutdown.php" class="button-no-animate-mode button curve button small button orange">Shutdown</a>

                    	<h4> Software Update </h4> 

                    	<a href="../System-Settings/Update-Interface/index.php" class="button-no-animate-mode button curve button small button orange">Update Smith Pad</a>
                
                    	<h4>Display Brightness</h4>
                    	<?php include 'src/avakasaya/space2.php'?>
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/10-percent.php" class="button-no-animate-mode button curve button small button orange">10</a>
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/20-percent.php" class="button-no-animate-mode button curve button small button orange">20</a>
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/30-percent.php" class="button-no-animate-mode button curve button small button orange">30</a>
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/40-percent.php" class="button-no-animate-mode button curve button small button orange">40</a>
			<?php include 'src/avakasaya/space3.php'?>
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/50-percent.php" class="button-no-animate-mode button curve button small button orange">50</a>		
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/60-percent.php" class="button-no-animate-mode button curve button small button orange">60</a>		
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/70-percent.php" class="button-no-animate-mode button curve button small button orange">70</a>		
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/80-percent.php" class="button-no-animate-mode button curve button small button orange">80</a>
                    	<?php include 'src/avakasaya/space3.php'?>		
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/90-percent.php" class="button-no-animate-mode button curve button small button orange">90</a>		
		        <a href="System-Settings/Display-Brightness-Home-Screen-Panel/100-percent.php" class="button-no-animate-mode button curve button small button orange">100</a>
                        </div>
    
                </div>
            </div>

    </div>
</p>
