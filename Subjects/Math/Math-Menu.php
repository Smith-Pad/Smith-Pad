<?php 
/*********************************************
 * Include UI Components
 *********************************************/

function includeUI() {
        include '../System_Files/system.global.include.ui.php';
}

function headerBar() {
        print("<div class='FOIL-Navigation-Bar color-is-red'>Math-Menu</div>");
}



print("<div class='FOIL-Layout color-is-black'>");

/************************************************************************************************ */
function firstSection() {
        print("<h1>Numbers</h1>");
        print("<h2>Whole Numbers</h2>");
        print("<a href='./Numbers/Whole Numbers/index.html' class='FOIL-button color-is-pink'>Understanding Whole Numbers</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Comparing Whole Numbers</a>");
        print("<h2>Rounding</h2>");
        print("<a href='./Numbers/Rounding Numbers/index.html' class='FOIL-button color-is-pink'>Rounding Numbers</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Rounding on a Number Line</a>");
        print("<h2> Exponents </h2>");
        print("<a href='./Numbers/Exponents/index.html' class='FOIL-button color-is-pink'>Exponents</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Exponential Form</a>");
        print("<h2>Mental Math</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Mental Math Strategies</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Properties and Mental Math</a>");
        print("</div>");
}


/************************************************************************************************ */
function secondSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h1> Algebra </h1>");
        print("<h2> Intro to Algebra</h2>");
        print("<a href='./Algebra/Intro to Algebra/index.php' class='FOIL-button color-is-pink'>Intro to Algebra</a>");
        print("<h2>Order of Operations</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Order of Operations</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Expressions with Variables</a>");
        print("<h2>Expressions </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Algebric Expressions</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Expressions with Patterns</a>");
        print("<h2> Solving Equations</h2>");
        print("<a href='./Algebra/Solving Equations by Subtracting/index.html' class='FOIL-button color-is-pink'>Solving Equations by Subtracting</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Solving Equations by Adding</a>");
        // TODO: Allow dynamic separation for the UI for other devices for better accessibility
        print("<a href='/' class='FOIL-button color-is-pink'>Solving Equations by Dividing</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Solving Equations by Multiplying </a>");
        print("<h2> Inequalities</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Exploring Inequalities</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Solving Inequalities </a>");
        print("</div>");
}


/************************************************************************************************ */
function thirdSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h1>Decimals</h1>");
        print("<h2> Understanding Decimals </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Reading and Writing Decimals</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Rounding Decimals </a>");
        print("<h2> Comparing and Ordering</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Comparing Decimals</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Ordering Decimals</a>");
        print("<h2> Adding and Subtracting Decimals</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Adding Decimals</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Subtracting Decimals</a>");
        print("<h2> Multiplying and Dividing Decimals</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Multiplying with Decimals</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Dividing With Decimals</a>");
        print("</div>");   
}

/************************************************************************************************ */



/************************************************************************************************ */
function fourthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h1>Number Theory</h1>");
        print("<h2> Divisiblity</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Divisiblity</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Divisiblity Rules</a>");
        print("<h2> Prime and Composite </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Prime and Composite</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Prime Factorization</a>");
        print("<h2> Greatest Common Factor </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Common Factors</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Greatest Common Factor</a>");
        print("<h2> Least Common Factors</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Common Multiples</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Least Common Multiple</a>");
        print("</div>");
}

/************************************************************************************************ */


/************************************************************************************************ */
function fifthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print(" <h2>Fractions and Mixed Numbers</h2>");
        print("<h2> Understanding Fractions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Modeling Fractions</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Equivalent Fractions</a>");
        print("<h2>Mixed Numbers</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Writing Improper Fractions as Mixed Numbers</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Writing Mixed Fractions as Improper Fractions</a>");
        print("<h2> Comparing and Ordering</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Comparing and Ordering Fractions </a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Comparing and Ordering Mixed Fractions</a>");
        print("<h2>Adding Fractions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Adding Fractions</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Adding Mixed Numbers</a>");
        print("<h2> Subtracting Fractions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Subtracting Fractions</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Subtracting Mixed Fractions</a>");
        print("<h2> Multiplying Dividing Fractions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Multiplying with Fractions</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Dividing with Fractions and Mixed Numbers</a>");
        print("</div>");
}

/************************************************************************************************ */



/************************************************************************************************ */
function sixthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h1>Ratios, Proportions, and Percents</h1>");
        print("<h2> Ratios and Proportions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Ratios</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Proportions</a>");
        print("<h2>Understanding Percent</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Percent</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Fractions, Decimals, and Percents</a>");
        print("<h2> Percent of Number</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Finding the Percent of a Number</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Percents Less than 1% or Greater than 100%</a>");
        print("<h2> Applications of Percent </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Discounts and Sales Tax</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Simple Interest</a>");
        print("</div>");
}

/************************************************************************************************ */


/************************************************************************************************ */
function seventhSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Data Statistics</h2>");
        print("<h2> Organizing Data</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Frequency Table</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Line Plots</a>");
        print("<h2> Analyzing Data</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Stem and Leaf Plots</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Mean, Medium, and Mode</a>");
        print("<h2>Bar and Line Graphs</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Bar Graphs</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Line Graphs</a>");
        print("<h2> Double Bar Graphs</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Double Bar Graphs</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Incorrect and Misleading Graphs</a>");
        print("</div>");
}

/************************************************************************************************ */




/************************************************************************************************ */
function eightSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Geometry</h2>");
        print("<h2> Lines and Angles</h2>");
        print("<a href='Geometry/Types-of-Lines/index.html' class='FOIL-button color-is-pink'>Types of Lines</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Pairs of Lines</a>");
        print("<a href='Geometry/Types-Of-Angles/index.html' class='FOIL-button color-is-pink'>Types of Angles</a>");
        print("<h2> Angles and Triangles</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Angle Pairs </a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Triangles </a>");
        print("<a href='Geometry/Types-of-Triangles/index.html' class='FOIL-button color-is-pink'>Types of Triangles</a>");
        print("<h2> Polygons</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Polygons </a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Quadrilaterals </a>");
        print("<a href='Geometry/Identify-Quadrilaterals/index.html' class='FOIL-button color-is-pink'>Identify Quadrilaterals (Practice) </a>");
        print("<h2> Congrunent Figures</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Congruent Figures</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Missing Measures</a>");
        print("<h2> Similar Figures</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Similar Figures</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Applying Similarity</a>");
        print("<h2> Transformations</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Transformations</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Reflections</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Rotations</a> ");
        print("<a href='/' class='FOIL-button color-is-pink'>Tesselations</a> ");
        print("</div>");
}

/************************************************************************************************ */



/************************************************************************************************ */
function ninthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Area and Volume</h2>");
        print("<h2> Perimeter and Area </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Perimeter</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Area</a>");
        print("<h2> Circles </h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Circumference of a Circle</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Area of a Circle</a>");
        print("<h2>Surface Area</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Surface Area of a Prism</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Surface Area of a Cylinder</a>");
        print("<h2> Volume</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Volume of a Prism</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Volume of a Cylinder</a>");
        print("</div>");
}

/************************************************************************************************ */



/************************************************************************************************ */
function tenthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Probability</h2>");
        print("<h2> What is Probability</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Intro to Probability</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Impossible or Certain</a>");
        print("<h2> Making Predictions</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Experimental Probability</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Making Predictions from Data</a>");
        print("<h2> Counting</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Tree Diagrams</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>The Counting Principle</a>");
        print("<h2>Arrangements</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Permutations</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Combinations</a>");
        print("</div>");
}

/************************************************************************************************ */


/************************************************************************************************ */
function eleventhSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Integers</h2>");
        print("<h2> What are Integers</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Integers on a Number Line</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Comparing and Ordering Integers</a>");
        print("<h2>Adding and Subtracting Integers</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Adding Integers</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Subtracting Integers</a>");
        print("<h2> Multiplying and Dividing Integers</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Multiplying Integers</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Dividing Integers</a>");
        print("<h2> The Coordinate Plane</h2>");
        print("<a href='/' class='FOIL-button color-is-pink'>Points on a Coordinate Plane</a>");
        print("<a href='/' class='FOIL-button color-is-pink'>Graphing Linear Equations</a>");
        print("</div>");
}

/************************************************************************************************ */



/************************************************************************************************ */
function twelfthSection() {
        print("<div class='FOIL-Layout color-is-black'>");
        print("<h2>Senal's Real World</h2>");
        print("<a href='./Money-Problems/splashscreen_1.html' class='FOIL-button color-is-pink'>Real World Money Problems</a>");
        print("</div>");
}

/************************************************************************************************ */

includeUI();
headerBar();
firstSection(); 
secondSection(); 
thirdSection();
fourthSection();
fifthSection();
sixthSection();
seventhSection();
eightSection();
ninthSection();
tenthSection();
eleventhSection();
twelfthSection();


?>

