## edit.sh

## Script to make it easier. 
## Written by Senal Bulumulle


clear

echo """
=====================================
System_Files
=====================================
1) system.global.include.ui.php
2) system.global.include.content.php
3) system.global.include.font.styles.php
4) system.global.include.navi.buttons.php


--------DIRECTIONS--------

Selecting the directory will go to vim. 
After :qa! :q! or :wq! 
Press enter to reveal the instructions 
again
------------------------------
back) back to edit.sh
------------------------------
"""
while :
	do 
	read CHOICE

	case $CHOICE in 
                1) 
                        clear
                        vim System_Files/system.global.include.ui.php
                        ;;

                2) 
                        vim System_Files/system.global.include.content.php
                        ;;


		3) 
                        vim System_Files/system.global.include.font.styles.php
			;;


		4)
                        vim System_Files/system.global.include.navi.buttons.php
			;;


		back) 
			sh edit.sh
			;;

                *) 
echo """
=====================================
System_Files
=====================================
1) system.global.include.ui.php
2) system.global.include.content.php
3) system.global.include.font.styles.php
4) system.global.include.navi.buttons.php


------------------------------
back) back to edit.sh
------------------------------

"""
esac
done
