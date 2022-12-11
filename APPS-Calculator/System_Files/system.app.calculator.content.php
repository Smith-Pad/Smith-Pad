<!----------------------------------------------------------------
    system.app.calculator.content.php

    This file is used to show the content.      
---------------------------------------------------------------->

<div id='result'>
<center>
<form name="calculator">
<input type="text" name="answer" class="FOIL-button-regular-no-shadow" /> 

<br>
<?php include 'src/avakasaya/space-5.php'; ?>          
<input type="button" value=" 1 " class="FOIL-button-regular-no-shadow" onclick="calculator.answer.value += '1'" />
<input type="button" value=" 2 " class="FOIL-button-regular-no-shadow" onclick="calculator.answer.value += '2'" />
<input type="button" value=" 3 " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '3'" />
<input type="button" value=" + " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '+'" />
<br/>
<?php include 'src/avakasaya/space-7.php'; ?>
<input type="button" value=" 4 " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '4'" />
<input type="button" value=" 5 " class="FOIL-button-regular-no-shadow" onclick="calculator.answer.value += '5'" />
<input type="button" value=" 6 " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '6'" />
<input type="button" value=" - " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '-'" />
</br>
<?php include 'src/avakasaya/space-7.php'; ?>
<input type="button" value=" 7 " class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '7'" />
<input type="button" value=" 8 "  class="FOIL-button-regular-no-shadow" onclick="calculator.answer.value += '8'" />
<input type="button" value=" 9 "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '9'" />
<input type="button" value=" x "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '*'" />
</br>
<?php include 'src/avakasaya/space-7.php'; ?>  
<input type="button" value=" c "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value = ''" />
<input type="button" value=" 0 "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '0'" />
<input type="button" value=" = "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value = eval(calculator.answer.value)" />
<input type="button" value=" / "  class="FOIL-button-regular-no-shadow"onclick="calculator.answer.value += '/'" />
</br>


</form>
</center>