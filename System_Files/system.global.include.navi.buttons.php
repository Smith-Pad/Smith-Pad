<?php
// Include Buttons in navigation if it is required so
// Example
// <a href="#" class="FOIL-button-regular-no-shadow"></a>
function naviButtons() {
        print('<a href="#" class="FOIL-button-regular-no-shadow">Shutdown</a>');
        print('<a href="#" class="FOIL-button-regular-no-shadow">Restart</a>');
        print('<a href="system.global.include.sleep.mode.php" class="FOIL-button-regular-no-shadow">Suspend</a>');
        print('</div>');
}
naviButtons();
?>