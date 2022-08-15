<?php
// Lists out packages needed to be upgraded
$AVOID_CONFLICT_1 = shell_exec('rm -rf Packages-List-Output/list-packages-upgrade-output');
$INITIALIZE_PACKAGE_1 = shell_exec('pkexec pacman -Syup >> Packages-List-Output/list-packages-upgrade-output');
print($AVOID_CONFLICT_1);
print($INITIALIZE_PACKAGE_1);

?>

<?php
// Lists out packages that are already installed in the system
$AVOID_CONFLICT_2 = shell_exec('rm -rf Packages-List-Output/installed-packages-list');
$INITIALIZE_PACKAGE_2 = shell_exec('pkexec pacman -Qe >> Packages-List-Output/installed-packages-list');
print($AVOID_CONFLICT_2);
print($INITIALIZE_PACKAGE_2);

?>

<meta http-equiv="refresh" content="16; url=Packages-List-Output/index.php">