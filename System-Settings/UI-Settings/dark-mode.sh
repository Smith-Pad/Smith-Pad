#################################################################
#   dark-mode.sh
#
#   Ability to change the color scheme to <color scheme name> 
#   by a touch of a button. 
#################################################################

## Removes the config file to prevent conflicts to the Smith-Pad-OS-Interface
rm -rf ../../src/config.css


## Use the Night Version of the config.css file to replace the config file to [Smith-Pad-OS-Shell/src/]
echo """
/*******************************************************
 *		config.css
 *
 *
 *	Customize FOIL-UI.css  Components
 *******************************************************/

@import url('FOIL-UI.css');

body {
        background: linear-gradient(120deg, rgb(15, 1, 32) 51%, rgb(9, 24, 0) 70%);
        color: white;
}

.FOIL-button {
        background: linear-gradient(120deg, rgb(15, 1, 32) 51%, rgb(9, 24, 0) 70%);
}


.FOIL-button:hover {
        background: linear-gradient(120deg, rgb(45, 0, 104) 51%, rgba(110, 148, 84, 1) 70%);
        box-shadow: red;
        border-style: solid;
        padding: 100px 43px;
}

.FOIL-button-small {
        background: linear-gradient(120deg, rgb(15, 1, 32) 51%, rgb(9, 24, 0) 70%);
        font-size: 20px;
        border-top: 1px;
        border-color: rgba(110, 148, 84, 1) rgba(134, 44, 255, 1);
        border-style: solid;
}

.FOIL-button-small:hover {
        background: linear-gradient(120deg, rgba(134, 44, 255, 1) 51%, rgba(110, 148, 84, 1) 70%);
}


.FOIL-Navigation-Bar {
        background-color: transparent;
        border-radius: 10px;
        color: white;
}


.FOIL-Layout {
        background-color: transparent;
        border-radius: 10px;
        color: white;
}




h1 {
        color: white;
}

pre {
        color: white;
}


FOIL-Font-Size-30 {
        color: white;
}


FOIL-Font-Size-60 {
        color: white;
}



""" >> ../../src/config.css