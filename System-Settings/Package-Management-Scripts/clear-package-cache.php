<?php
/**
 * How does it work? 
 * 
 * 
 * This creates a temporary file to create a temporary memory blob to clear 
 * cache without showing the terminal output to prevent the end-user's 
 * confusion. 
 */
$UPDATE_PACKAGES = shell_exec('pkexec pacman -Sc --noconfirm >> clear-package-cache.txt');
$REMOVE_TEMP_FILE = shell_exec('rm -rf clear-package.cache.txt');
$NOTIFY = shell_exec('notify-send "Completed"');
print($UPDATE_PACKAGES);
print($REMOVE_TEMP_FILE);
print($NOTIFY);

?>
<meta http-equiv="refresh" content="0; url=../index.php">
