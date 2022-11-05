import os

############################################################
# Applications
# - This will copy the src files to the Applications folder
#############################################################
def Applications():
        os.system('cp -R src Applications/')

############################################################
# Applications-Menu
# - This will copy the src files to the Applications-Menu folder
#############################################################
def Applications_Menu():
        os.system('cp -R src Applications-Menu/')


############################################################
# Settings_Menu
# - This will copy the src files to the Settings-Menu folder
#############################################################
def Settings_Menu():
        os.system('cp -R src Settings-Menu/')


############################################################
# Subjects
# - This will copy the src files to the Subjects folder
#############################################################
def Subjects():
        os.system('cp -R src Subjects/')


############################################################
# System-Settings
# - This will copy the src files to the System-Settings folder
#############################################################
def System_Settings():
        os.system('cp -R src System-Settings/')



############################################################
# Settings-Menu
# - This will copy the src files to the Settings-Menu folder
#############################################################
def Settings_Menu():
        os.system('cp -R src Settings-Menu/')


Applications()
Applications_Menu()
Subjects()
System_Settings()
Settings_Menu()