#########################################################################################
#       configure.sh
#
#       This script installs some configuration files to run Smith-Pad-OS-Shell
#
#
#########################################################################################


##########################################################################
##     Copies the xsession files to /usr/share/xsessions
##
##########################################################################

cd xsessions
cp shell.desktop                                      /usr/share/xsessions




##########################################################################
##     Copies the systemd daemons to /etc/systemd/system
##
##########################################################################

cd /etc/systemd/system
cp shell-php.service                                 /etc/systemd/system