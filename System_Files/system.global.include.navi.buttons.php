<?php
// Include Buttons in navigation if it is required so
// Example
// <a href="#" class="FOIL-button-regular-no-shadow"></a>
function naviButtons() {
        print('<form method="post">');
                print('<input type="submit" name="Shutdown" class="FOIL-button-regular-no-shadow" value="Shutdown" />');
                print('<input type="submit" name="Restart" class="FOIL-button-regular-no-shadow" value="Restart" />');
                print('<input type="submit" name="Suspend" class="FOIL-button-regular-no-shadow" value="Suspend" />');
                print('</form>');
        print('</div>');

        if(isset($_POST['Shutdown'])) {
                shell_exec('touch SHUTDOWN');
        }
        if(isset($_POST['Restart'])) {
                shell_exec('touch RESTART');
        }
        if(isset($_POST['Suspend'])) {
                shell_exec('touch SUSPEND');
        }
}
naviButtons();


?>