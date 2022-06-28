<!-- 
    index.php

    Subjects is a component of the Smith-Pad Web-Interface 
    that allows students to learn Math, Reading, Science, 
    and other subjects in a fun and tactful way, even when 
    they are not connected to the internet.

-->


<meta name="viewport" content="width=device-width, initial-scale=1">

<?php 

/*********************************************
 * Include UI Components
 *********************************************/

include 'System_Files/system.global.include.ui.php';


/******************************************************************
 * Main Menu Header Bar Name
 * 
 * 
 * This is included in System_Files/system.subjects.header.bar.php
 ******************************************************************/

$MAIN_MENU_HEADER_BAR="<h1> Subjects </h1>";                                        // Main Menu Header Bar Name 
include 'System_Files/system.subjects.header.bar.php';                              // Include Header Bar Interface

/******************************************************************
 * Main Menu Subjects List
 * 
 * 
 * This is included in System_Files/system.subjects.list.php
 ******************************************************************/

$MAIN_MENU_SUBJECTS_LIST_Math = "<a href='./Math/Math-Menu.php' class ='FOIL-button'>Math</a>";                                           
$MAIN_MENU_SUBJECTS_LIST_Reading = "<a href='./Reading/Reading-Menu.php' class ='FOIL-button'>Reading</a>";
$MAIN_MENU_SUBJECTS_LIST_Science = "<a href='./Science/Science-Menu.php' class='FOIL-button'>Science</a>";
$MAIN_MENU_SUBJECTS_LIST_BACK_BUTTON = print("<a href='../index.php' class='FOIL-button'>Back</a>"); 


                                        
include 'System_Files/system.subjects.list.php';                                    // Include Subject List Interface
?> 
