<?php
	// Calls python to do the magic 

        $log = shell_exec('touch ../../.log/user-changed-to-chinese');

	$call = shell_exec('python chinese.py');
        
        print($log);
	print($call);


?>
