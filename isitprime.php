<?php 
  if (is_numeric($_GET["number"])&&$_GET["number"]>0&&$_GET["number"]==round($_GET["number"],0))
    $i=2;
    $isPrime=true;


?>




<p>Type in a number to see if it is prime!</p>
<form>
  <input name="number" type="text">
  <input value="Check!" type="submit">
</form>
