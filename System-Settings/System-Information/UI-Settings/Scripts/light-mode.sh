#################################################################
#   light-mode.sh
#
#   Ability to change the color scheme to light 
#   by a touch of a button. 
#################################################################

## Change directory to Smith-Pad/src
cd ../
cd ../
cd ../src


## Remove config.css to prevent conflict
rm -rf config.css




## Create config.css file 
touch config.css 




## Add the day colorscheme 
echo """
/*******************************************************
 *		config.css
 *
 *
 *	Customize FOIL-UI.css  Components
 *******************************************************/

 @import url('FOIL-UI.css');

 body {
         /*background-color: black;*/
         background: radial-gradient(circle, rgba(110,148,84,1) 30%, rgba(134,44,255,1) 80%);
         color: white;
 }
 
 .FOIL-button {
        background: linear-gradient(120deg, rgb(35, 0, 82) 51%,rgba(41, 102, 0));       
}
 
 
 .FOIL-button:hover {
         background: linear-gradient(120deg, rgba(134,44,255,1) 51%, rgba(110,148,84,1) 70%);
         box-shadow: red;
         border-style: solid;
         padding: 100px 43px;
 }
 
 .FOIL-button-small {
         background: linear-gradient(90deg, rgba(135, 44, 255, 0.082) 21%, rgba(110, 148, 84, 0.087) 58%);
         font-size: 20px;
         border-top: 1px;
         border-color: rgba(110,148,84,1) rgba(134,44,255,1) ;
         border-style:solid;  
 }

 .FOIL-button-small:hover {
        background: linear-gradient(120deg, rgba(134,44,255,1) 51%, rgba(110,148,84,1) 70%);
 }


 .FOIL-Navigation-Bar {
        background: radial-gradient(circle, rgba(110,148,84,1) 0%, rgba(134,44,255,1) 80%);
        border-radius: 10px;
        color:white;
 }


 .FOIL-Layout {
        background: linear-gradient(90deg, rgba(134,44,255,1) 21%, rgba(110,148,84,1) 58%);
        border-radius: 10px;  
        color:white;      
 }
 
 
 
 
 h1 {
         color: white;
 }



""" >> config.css