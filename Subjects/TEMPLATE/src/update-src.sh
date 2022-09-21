## update-src.sh 
## Script to update src to multiple folders automatically 

function subjectsMenu() {
	cp config.css ../Subjects/src
	cp FOIL-UI.css ../Subjects/src
}


function appsMenu() {
	cp config.css ../APPS/src
	cp FOIL-UI.css ../APPS/src
} 




## Notify the user

echo """
####################################################
#	/!\ Files are updated
#
#
####################################################
"""

subjectsMenu
appsMenu
