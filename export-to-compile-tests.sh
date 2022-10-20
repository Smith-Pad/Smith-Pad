## export-to-compile-tests.sh
##      
##      index.php
##      System_Files
##      src
##      Settings-Menu
##      Kids-Mode
##      
##
##
##



###################################################
#                NORMAL MODE
#
#
###################################################

## ---------------HOME SCREEN------------------

## First go to the Home Screen.  
cd Home-Screen 
# ## Compile the folders ONLY
# ## Copy index.php to the EXPORT-TO-COMPILE-TESTS folder. 
# cp index.php ../EXPORT-TO-COMPILE-TESTS
# ## Copy System_Files to the EXPORT-TO-COMPILE-TESTS folder. 
# cp -R System_Files ../EXPORT-TO-COMPILE-TESTS

cp -R * ../EXPORT-TO-COMPILE-TESTS



## ---------------Settings-Menu------------------
cd ../EXPORT-TO-COMPILE-TESTS 
mkdir Settings-Menu

cd ../Settings-Menu
cp -R * ../EXPORT-TO-COMPILE-TESTS/Settings-Menu



## ---------------Kids Mode------------------

cd ../EXPORT-TO-COMPILE-TESTS
mkdir Kids-Mode

cd ../Kids-Mode
cp -R * ../EXPORT-TO-COMPILE-TESTS/Kids-Mode



## ---------------Subjects------------------

cd ../EXPORT-TO-COMPILE-TESTS
mkdir Subjects

cd ../Subjects
cp -R * ../EXPORT-TO-COMPILE-TESTS/Subjects



## ---------------Applications------------------

# cd ../EXPORT-TO-COMPILE-TESTS
# mkdir APPS

# cd ../Applications
# cp -R * ../EXPORT-TO-COMPILE-TESTS/APPS

