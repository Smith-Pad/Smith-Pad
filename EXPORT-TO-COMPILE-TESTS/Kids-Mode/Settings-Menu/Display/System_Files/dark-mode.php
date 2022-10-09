<?php
	/**
	 *	dark-mode.php
	 *
	 *
	 *
	 *	The ability to change colours via user
	 * 	interaction in the user interface
	 *
	 *************************************************/

	 
	// This will generate a log file first. 
	$log = shell_exec('touch ../../../.log/user.changed.color.to.dark.mode');

	
	$changetodarkmode = shell_exec('python dark-mode.php');
	print($changetodarkmode);

?>

