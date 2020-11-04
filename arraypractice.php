<?php
$myArray= array("cheese","please","bees","seas");
print_r($myArray);
echo "<br><br>";
echo $myArray[1];
echo "<br><br>";

$anotherArray[0]="why";
$anotherArray[1]="oh";
$anotherArray[2]="why";
$anotherArray[3]="oh";
$anotherArray[4]="why";
$anotherArray[5]="can't";
$anotherArray[6]="I";
print_r($anotherArray);
echo "<br><br>";

$thirdArray = array(
  'Germany' => 'German',
  'England'=>'English',
  "France"=>"French");
print_r($thirdArray);
echo "<br><br>";
echo sizeof($thirdArray);
echo "<br><br>";
$thirdArray['Norway']='Norwegian';
print_r($thirdArray);
echo "<br><br>";
unset($thirdArray["France"]);
print_r($thirdArray);
?>
