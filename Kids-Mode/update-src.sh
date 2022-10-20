## update-src.sh
## Script to update [src] efficiently to the Folders 
## Making it easier to update it. Without having to 
## Manually update all of the src files for a long time. 

function AppsFolder() {
        cp -R src Applications
        echo "[ OK ]"
}


function HomeScreenFolder() {
        cp -R src Home-Screen
        echo "[ OK ]"
}

function SettingsMenu() {
        cp -R src Settings-Menu
        echo "[ OK ]"
}


function Subjects() {
        cp -R src Subjects 
        echo "[ OK ]"
}



AppsFolder
HomeScreenFolder
SettingsMenu
Subjects