# restart-script.sh
## Script to restart System 

## This is useful to have a safe shutdown.
function timer() {
        sleep 5; 
}


function shutdown() {
        systemctl shutdown
}


timer
shutdown

