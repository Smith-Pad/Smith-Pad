## edit.sh

## Script to make it easier. 
## Written by Senal Bulumulle


clear

echo """
=====================================
Choose Options
=====================================
1) .log
2) .lang
3) Home-Screen
4) Settings-Menu
5) APPS/Clock-Mode
^C) Exit

"""
while :
	do 
	read CHOICE

	case $CHOICE in 
                1) 
                        clear
                        sh 
                        ;;

                2) 
                        clear
                        sh lang-menu.options.sh
                        ;;

                3) 
                        clear
                        sh home-screen-options.sh
                        ;;

		8)
			exit 0
			;;
esac
done
