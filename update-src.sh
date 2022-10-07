## update-src.sh
## Script to update [src] efficiently to the Folders 
## Making it easier to update it. Without having to 
## Manually update all of the src files for a long time. 

function copyToAppsFolder() {
        cp -R src Applications
        echo "[ OK ]"
}


function copyToHomeScreenFolder() {
        cp -R src Home-Screen
        echo "[ OK ]"
}

function copyToSettingsMenu() {
        cp -R src Settings-Menu
        echo "[ OK ]"
}


function copytoSubjects() {
        cp -R src Subjects 
        echo "[ OK ]"
}



copyToAppsFolder
copyToHomeScreenFolder
copyToSettingsMenu
copytoSubjects