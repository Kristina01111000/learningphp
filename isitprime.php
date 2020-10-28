<?php 
  if (is_numeric($_GET["number"])&&$_GET["number"]>0&&$_GET["number"]==round($_GET["number"],0)){
    $i=2;
    $isPrime=true;
    while($i<$_GET["number"]){
      if($_GET["number"] % $i == 0){
      $isPrime=false;
      }
    i++;
    }
    
    
  } else if($_GET){
    echo "<p>Please enter a positive whole number</p>";
  }
?>




<p>Type in a number to see if it is prime!</p>
<form>
  <input name="number" type="text">
  <input value="Check!" type="submit">
</form>
