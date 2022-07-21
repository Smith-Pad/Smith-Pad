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
        background: linear-gradient(120deg, rgb(29, 0, 66) 51%, rgb(15, 39, 0) 70%);
        color: white;
}

.FOIL-button {
        background: linear-gradient(120deg, rgb(35, 0, 82) 51%, rgba(41, 102, 0));
}


.FOIL-button:hover {
        background: linear-gradient(120deg, rgba(134, 44, 255, 1) 51%, rgba(110, 148, 84, 1) 70%);
        box-shadow: red;
        border-style: solid;
        padding: 100px 43px;
}

.FOIL-button-small {
        background: linear-gradient(90deg, rgba(135, 44, 255, 0.082) 21%, rgba(110, 148, 84, 0.087) 58%);
        font-size: 20px;
        border-top: 1px;
        border-color: rgba(110, 148, 84, 1) rgba(134, 44, 255, 1);
        border-style: solid;
}

.FOIL-button-small:hover {
        background: linear-gradient(120deg, rgba(134, 44, 255, 1) 51%, rgba(110, 148, 84, 1) 70%);
}


.FOIL-Navigation-Bar {
        background: linear-gradient(circle, rgba(110, 148, 84, 1) 0%, rgba(134, 44, 255, 1) 80%);
        border-radius: 10px;
        color: white;
}


.FOIL-Layout {
        background: linear-gradient(90deg, rgba(135, 44, 255, 0.082) 21%, rgba(110, 148, 84, 0.087) 58%);
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