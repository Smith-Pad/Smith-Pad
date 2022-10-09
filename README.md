# Smith-Pad-OS-Shell Project

<img src="screenshot.png"></img>

# Section 1:

#### Introduction

> Brand new Interface for Smith-Pad-OS and Smith-Pad Web Interface

#### Benefits of remaking the interface from the bottom up:

* Solving Accessiblility Issues for smaller to larger devices 

* Consistant UI Design view 

* Security issues with the original Smith-Pad-UI. 

* Replaced every UI component with FOIL-UI. 

* Integrating with Smith-Pad-OS. 

#### Requirements

- [ ] Arch Linux
- [ ] git
- [ ] php
- [ ] python
- [ ] xorg
- [ ] xorg-server
- [ ] xorg-xinit
- [ ] FOIL-UI-Framework-Library
- [ ] GNOME Libraries/Dependencies

#### Installation

`sudo pacman -S git`

`sudo pacman -S php`

`sudo pacman -S python`

`sudo pacman -S xorg`

`sudo pacman -S xorg-server`

`sudo pacman -S xorg-xinit`



### First you have to copy the systemd daemon. This allows systemd to automatically start the php service every time the system boots.

`cd systemd/system`

`cp shell-php.service /etc/systemd/system`



### Then you have to copy the shell script. This allows systemd to call the script to automatically start the php service every time the system boots.

`cd php-shell-script`

`cp shell-php.sh /usr/bin`



### Then you have to enable and start the systemd daemon

`systemctl enable shell-php.service`

`systemctl start shell-php.service`

###### It is recommended to check the status of the `shell-php.service` daemon using this command: `systemctl status shell-php.service`.



# DRAFT

### Make sure you are in in the root directory as root

`sudo su`

`git clone https://github.com/Smith-Pad/Smith-Pad-OS-Installation-Script`

`cd Smith-Pad-OS-Installation-Script`

### For now, checkout branch to fixing-stuff

##### Eventually, it will be merged into the main branch

`git checkout fixing-stuff`

`sh install.sh`

### Follow the instructions in the `install.sh script`

### Installation of `yay`

`git clone https://aur.archlinux.org/yay.git`

`cd yay`

`makepkg -si`
