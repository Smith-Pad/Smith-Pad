<!-- Calculator.html-->
<link rel="stylesheet" href="../../src/Custom_Tags.css" type="text/css">
<link rel="stylesheet" href="../../src/position-text.css" type="text/css">
<link rel="stylesheet" href="../../src/UI.css" type="text/css">
<link rel="stylesheet" href="../../src/FOIL-Bar.css" type="text/css">
<link rel="stylesheet" href="../../src/layouts.css.css" type="text/css">
<title> Calculator </title>
<!-- Custom Dependencies -->
<link rel="stylesheet" href="calculator.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<center> <h1> Calculator</h1></center>
<div id='result'>
  <center>
    <form name="calculator">
      
      <input type="text" name="answer" />
      <br>
      
      <input type="FOIL-button-regular" value=" 1 " class="button-no-animate-mode" onclick="calculator.answer.value += '1'" />
      <input type="FOIL-button-regular" value=" 2 " class="button-no-animate-mode" onclick="calculator.answer.value += '2'" />
      <input type="FOIL-button-regular" value=" 3 " class="button-no-animate-mode"onclick="calculator.answer.value += '3'" />
      <input type="FOIL-button-regular" value=" + " class="button-no-animate-mode"onclick="calculator.answer.value += '+'" />
      <br/>
      
      <input type="FOIL-button-regular" value=" 4 " class="button-no-animate-mode"onclick="calculator.answer.value += '4'" />
      <input type="FOIL-button-regular" value=" 5 " class="button-no-animate-mode" onclick="calculator.answer.value += '5'" />
      <input type="FOIL-button-regular" value=" 6 " class="button-no-animate-mode"onclick="calculator.answer.value += '6'" />
      <input type="FOIL-button-regular" value=" - " class="button-no-animate-mode"onclick="calculator.answer.value += '-'" />
      </br>
    
      <input type="FOIL-button-regular" value=" 7 " class="button-no-animate-mode"onclick="calculator.answer.value += '7'" />
      <input type="FOIL-button-regular" value=" 8 "  class="button-no-animate-mode" onclick="calculator.answer.value += '8'" />
      <input type="FOIL-button-regular" value=" 9 "  class="button-no-animate-mode"onclick="calculator.answer.value += '9'" />
      <input type="FOIL-button-regular" value=" x "  class="button-no-animate-mode"onclick="calculator.answer.value += '*'" />
      </br>
  
      <input type="FOIL-button-regular" value=" c "  class="button-no-animate-mode"onclick="calculator.answer.value = ''" />
      <input type="FOIL-button-regular" value=" 0 "  class="button-no-animate-mode"onclick="calculator.answer.value += '0'" />
      <input type="FOIL-button-regular" value=" = "  class="button-no-animate-mode"onclick="calculator.answer.value = eval(calculator.answer.value)" />
      <input type="FOIL-button-regular" value=" / "  class="button-no-animate-mode"onclick="calculator.answer.value += '/'" />
      </br>


    </form>
    </center>
