#################################################################
#   dark-mode.sh
#
#   Ability to change the color scheme to <color scheme name> 
#   by a touch of a button. 
#################################################################

## Removes the config file to prevent conflicts to the Smith-Pad-OS-Interface
rm -rf ../../src/config.css


## Copies the Configuration Files to [Smith-Pad-OS-Shell/src/config.css]
cd Day/
cp config.css