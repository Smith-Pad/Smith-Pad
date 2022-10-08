## compile.sh

## Compile things to make it work


## Function 

function enableSuperUser() {
        clear
        sudo su
}

## Make a function to create a directory in 
function createDirectory() {
        ## Go to the /var/ directory
        cd /var

        ## ------------HOME SCREEN --------------------
        ##| This will create directories first in the 
        ##| Home Screen. 

        ## Create the directories in the Home Screen
        mkdir System_Files/
        mkdir src
        mkdir APPS
        mkdir Settings-Menu
}


enableSuperUser
createDirectory