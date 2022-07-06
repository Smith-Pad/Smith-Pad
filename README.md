# Smith-Pad-OS-Shell

Smith-Pad-OS-Shell based on various of dependencies 

## Goals

> Use Web components as a Window Manager 

> Use Lightweight dependencies to improve performance, while showing the unique UI. 

> Run Electron in a x11 environment (as a window manager)

## Dependencies

> Smith-Pad-OS or Arch-Linux based distributions

> xorg 

> xorg-twm

> xorg-xclock

> xterm

> openbox

> php

> electron

> plasma

> lxqt

> npm

> node.js

## Requirements

> Smith-Pad-OS or Arch-Linux based distributions

> xorg

> xorg-twm

> xorg-xclock

> xterm

> openbox

> php

> electron

> plasma

> lxqt

> npm

> node.js

## Installation

> `sudo pacman -S base-devel`

> `sudo pacman -S xorg`

> `sudo pacman -S xorg-twm`

> `sudo pacman -S xorg-xclock`

> `sudo pacman -S xterm`

> `sudo pacman -S openbox`

> `sudo pacman -S php`

> `sudo pacman -S electron`

> `sudo pacman -S plasma`

> `sudo pacman -S lxqt`

> `sudo pacman -S npm`

> `sudo pacman -S node.js`

## Running Smith-Pad-OS-Shell Locally

> Please follow these instructions to successfully run and debug 
> Smith-Pad-OS-Shell for the time being. These steps may change. 

1. Clone the Repository 

> `git clone https://github.com/Smith-Pad/Smith-Pad-OS-Shell`

2. Change the directory to Smith-Pad-OS-Shell. 

> `cd Smith-Pad-OS-Shell`

##### Recommendation tips.

> Please open two terminal instances. One for PHP and another for Electron.

###### Starting PHP and Electron

3. Running PHP

> `php -S localhost:3000`

4. Running Electron

> `electron http://localhost:3000`

###### Stopping PHP and Electron

5. Stopping PHP

> `^C`

> Press Control C to stop PHP

6. Stopping Electron

> `^C`

> Press Control C to stop Electron

# List of Files

```shell
├── Docs
│   ├── Installation
│   │   ├── Dependencies.md
│   │   └── README.txt
│   └── README.md
├── External-Apps-Launcher
│   ├── FOIL-UI.css
│   ├── index.php
│   ├── README.md
│   ├── run.sh
│   ├── test-1.php
│   ├── test-2.php
│   └── test-3.php
├── give-root.sh
├── Hexdump.senal
├── index.js
├── index.php
├── launch-first-app.php
├── launch-second-app.php
├── launch-third-app.php
├── Math-Operations.php
├── merge-reverse.sh
├── merge.sh
├── package.json
├── Power
│   ├── reboot.php
│   ├── shutdown.php
│   └── sleep.php
├── preload.js
├── README.md
├── run.sh
├── schedule-display.php
├── src
│   ├── avakasaya
│   │   ├── index.php
│   │   ├── position-text.css
│   │   ├── README.md
│   │   ├── space10.php
│   │   ├── space11.php
│   │   ├── space12.php
│   │   ├── space13.php
│   │   ├── space14.php
│   │   ├── space15.php
│   │   ├── space16.php
│   │   ├── space17.php
│   │   ├── space18.php
│   │   ├── space19.php
│   │   ├── space1.php
│   │   ├── space20.php
│   │   ├── space21.php
│   │   ├── space22.php
│   │   ├── space23.php
│   │   ├── space24.php
│   │   ├── space25.php
│   │   ├── space26.php
│   │   ├── space27.php
│   │   ├── space28.php
│   │   ├── space29.php
│   │   ├── space2.php
│   │   ├── space30.php
│   │   ├── space31.php
│   │   ├── space32.php
│   │   ├── space33.php
│   │   ├── space34.php
│   │   ├── space35.php
│   │   ├── space36.php
│   │   ├── space37.php
│   │   ├── space38.php
│   │   ├── space39.php
│   │   ├── space3.php
│   │   ├── space40.php
│   │   ├── space4.php
│   │   ├── space5.php
│   │   ├── space6.php
│   │   ├── space7.php
│   │   ├── space8.php
│   │   └── space9.php
│   ├── FOIL-Bar.css
│   ├── index.css
│   ├── layouts.css
│   ├── position-text.css
│   └── UI.css
├── Subjects
│   └── Subjects.php
└── System_Files
    ├── README.txt
    ├── system.global.include.ui.php
    ├── system.home.screen.banner.php
    ├── system.home.screen.foil.bar.settings.panel.php
    ├── system.home.screen.sub.menu.banner.php
    ├── system.home.screen.sub.menu.buttons.php
    └── system.home.screen.sub.menu.popup.buttons.php
```

# TODO:

> Find out why PHP doesn't open External Apps even with root permissions via `/etc/sudoers`
