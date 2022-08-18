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
        background: linear-gradient(12deg, #0d0e0f, #0d0e0f);
        color: white;
}

.FOIL-button-regular {
        background: linear-gradient(12deg, #0d0e0f, #0d0e0f);
}


.FOIL-button-regular:hover {
        background: linear-gradient(12deg, #0d0e0f, #0d0e0f);
        box-shadow: red;
        border-style: solid;
        box-shadow: orange;
        padding: 100px 43px;
}

.FOIL-button-small {
        background: linear-gradient(12deg, #0d0e0f, #0d0e0f);
        font-size: 20px;
        border-top: 1px;
        border-color: rgba(110, 148, 84, 1) rgba(134, 44, 255, 1);
        border-style: solid;
}

.FOIL-button-small:hover {
        background: linear-gradient(12deg, #0d0e0f, #0d0e0f);
}


.FOIL-navigation-bar {
        background: linear-gradient(circle, rgba(110, 148, 84, 1) 0%, rgba(134, 44, 255, 1) 80%);
        border-radius: 10px;
        color: white;
}


.FOIL-layout {
        background: linear-gradient(12deg, #0c0d0d, #131314);
        border-radius: 10px;
        color: white;
}




h1 {
        color: white;
}

pre {
        color: white;
}


FOIL-font-size-30 {
        color: white;
}


FOIL-font-size-60 {
        color: white;
}




""" >> ../../src/config.css