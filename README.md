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



# Section 2:
