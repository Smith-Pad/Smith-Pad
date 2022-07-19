<!--
        System-Information


-->


<?php 

function includeUI() {
        print('<link rel="stylesheet" href="/../src/layouts.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/Custom_Tags.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/position-text.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/UI.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/FOIL-Bar.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/FOIL-UI.css" type="text/css">'); 
        print('<link rel="stylesheet" href="../../src/config.css" type="text/css">');
        print('<link rel="stylesheet" href="../../src/animation.css" type="text/css">');
}

function banner() {
        print('<div class="FOIL-Navigation-Bar">');
        print('<h1> System-Information </h1>');                                                         // Banner Name
        print('<a href="../index.php" class="FOIL-button-small">Back</a>');                             // Go back to the System-Settings Menu
        print('</div>');
}


// Lists out storage devices in a detailed fashion
// This uses the lsblk command

function storageDevices() {

        print('<div class="FOIL-Layout">');
        print('<FOIL-Font-Size-60><pre>Storage Devices</pre></FOIL-Font-Size-60>');
        $lsblk = shell_exec('lsblk');
        print("<pre>$lsblk </pre>");
        print('</div>');
}

// Lists out network devices in a detailed fashion.
// This uses the nmcli command

function listNetwork() {

        print('<div class="FOIL-Layout">');
        print('<FOIL-Font-Size-60><pre>Network List</pre></FOIL-Font-Size-60>');
        $nmcli = shell_exec('nmcli device status');
        print("<pre>$nmcli </pre>");
        print('</div>');
}

// Shows the Kernel Version, what type of kernel is it, and more about it.
// This uses the uname -a command

function kernelInfo() {
        print('<div class="FOIL-Layout"><FOIL-Font-Size-60>Kernel Information</FOIL-Font-Size-60>');
        $kernelInfo = shell_exec('uname -a');
        print("<pre>$kernelInfo </pre>");
        print('</div>');
}

// Shows the uptime, to show how long the system has been running since boot. 
// This uses the uptime command


function upTime() {
        print('<div class="FOIL-Layout"><FOIL-Font-Size-60>Up-Time</FOIL-Font-Size-60>');
        $upTime = shell_exec('uptime');
        print("<pre>$upTime </pre>");
        print("</div>");
}

includeUI();
banner();
storageDevices();
listNetwork();
kernelInfo();
upTime();


?>