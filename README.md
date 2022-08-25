# Smith-Pad-OS-Shell

Smith-Pad-OS-Shell based on various of dependencies 

## Goals

> Use Web components as a Window Manager 

> Use Lightweight dependencies to improve performance, while showing the unique UI. 

> Run Electron in a x11 environment (as a window manager)

## Dependencies

> Pacman Package Manager 

> xrandr

> brightnessctl 


## Requirements

> Smith-Pad-OS or Arch-Linux based distributions

> 

## Installation

> Later on...

#### Automatic: Adding Config Files:

> In-order to get Smith-Pad-OS-Shell running, please follow the following directions provided here.

> > # Adding to /usr/share/xsessions Automatically
> 
> > > `sh configure.sh`

#### Manual: Adding Config Files:

> In-order to get Smith-Pad-OS-Shell running, please follow the following directions provided here.
> 
> > # Adding to /usr/share/xsessions
> 
> > > `cd xsessions`
> 
> > > `sudo cp shell.desktop /usr/share/xsessions/`

> > # Adding to /etc/systemd/system

> > > `cd etc/systemd/system`
> > > 
> > > `sudo cp shell-php.service /etc/systemd/system`
> > > 
> > > `sudo systemctl enable shell-php.service`
> > > 
> > > `sudo reboot`

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

```

# TODO:

> Find out why PHP doesn't open External Apps even with root permissions via `/etc/sudoers`
