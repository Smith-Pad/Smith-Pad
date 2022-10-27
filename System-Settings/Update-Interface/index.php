<?php
/**
 * Update Interface
 * 
 * 
 * This script allows the ability to update the Smith-Pad Interface 
 * using the git pull in the backend. Essentially, the user has
 * to press a button, and then in the backend, it makes use of the 
 * [git pull] command. 
 * 
 * 
 * The second process, after that, it makes use of the refresh syntax
 * in HTML to go to the splashscreen, informing the user that the 
 * process has been completed. 
 * 
 */

$git_pull = shell_exec('git pull');
$splashscreen = print('<meta http-equiv="Refresh" content="0; URL=splashscreen.php">');
?>
