## edit.sh

## Script to make it easier. 
## Written by Senal Bulumulle


clear

echo """
=====================================
Choose Options
=====================================
1) Home-Screen
8) Exit

"""
while :
	do 
	read CHOICE

	case $CHOICE in 
                1) 
                        clear
                        echo "hello world"
                        ;;

		8)
			return 0
			;;


		*)
			echo """

------------------------------------------------------
/!\: NOTE: 

PLEASE ENTER THE THE CHOICES HERE: 

=====================================
Choose Options
=====================================
1) Home-Screen
8) Exit
------------------------------------------------------
			"""
esac
done