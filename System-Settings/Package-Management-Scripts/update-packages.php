<?php
/**
 * How does it work? 
 * 
 * 
 * This creates a temporary file to create a temporary memory blob to update packages
 * without showing the terminal output to prevent the end-user's confusion. 
 */
$UPDATE_PACKAGES = shell_exec('pkexec pacman -Syyu --noconfirm >> update-packages.txt');
$REMOVE_TEMP_FILE = shell_exec('rm -rf update-packages.txt');
$NOTIFY = shell_exec('notify-send "Completed"');
print($UPDATE_PACKAGES);
print($REMOVE_TEMP_FILE);
print($NOTIFY);

?>
<meta http-equiv="refresh" content="0; url=../index.php">
