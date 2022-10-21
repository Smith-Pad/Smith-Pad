# shutdown-script.sh
## Script to shutdown System 

## This is useful to have a safe shutdown.
function timer() {
        sleep 5; 
}


function shutdown() {
        systemctl shutdown
}


timer
shutdown

