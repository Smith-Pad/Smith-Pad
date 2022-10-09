<?php
	// Calls python to do the magic 

        $log = shell_exec('touch ../../.log/user-changed-to-spanish');

	$call = shell_exec('python spanish.py');
        
        print($log);
	print($call);


?>
