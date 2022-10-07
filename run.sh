## edit.sh

## Script to make it easier. 
## Written by Senal Bulumulle


clear
echo """
=====================================
Choose Options
=====================================
1) Home-Screen
2) Settings-Menu
3) Subjects Menu 
4) Subjects re-write
8) Exit

"""
while :
	do 
	read CHOICE

	case $CHOICE in 
                1)
			cd Home-Screen 
			clear
			echo """
###########################################################################
#			YOU ARE CURRENTLY
#			RUNNING LOCALHOST
#			Home-Screen
#
###########################################################################
			"""
			php -S localhost:3000
			sh ../edit.sh
                        ;;

                2) 
                	cd Settings-Menu
                	clear
                	echo """
###########################################################################
#			YOU ARE CURRENTLY
#			RUNNING LOCALHOST
#			Settings-Menu
#
###########################################################################
                	"""
                	php -S localhost:3000
                	sh ../edit.sh
                	;;
                	
                3) 
                	cd Subjects
                	clear
                	echo """
###########################################################################
#			YOU ARE CURRENTLY
#			RUNNING LOCALHOST
#			Subjects
#
###########################################################################
                	"""
                	php -S localhost:3000
                	sh ../edit.sh
                	
esac
done
