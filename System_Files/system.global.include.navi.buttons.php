<?php
// Include Buttons in navigation if it is required so
// Example
// <a href="#" class="FOIL-button-regular-no-shadow"></a>
function naviButtons() {
        print('<a href="assets/shutdown-script.php" class="FOIL-button-regular-no-shadow">Shutdown</a>');
        print('<a href="assets/restart-script.php" class="FOIL-button-regular-no-shadow">Restart</a>');
        print('<a href="assets/suspend-script.php" class="FOIL-button-regular-no-shadow">Suspend</a>');
        print('</div>');
}
naviButtons();
?>