# restart-script.sh
## Script to restart System 

## This is useful to have a safe reboot.
function timer() {
        sleep 5; 
}


function shutdown() {
        systemctl reboot
}


timer
shutdown

