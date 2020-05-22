<?php
/*
Write a program for finding the biggest number in an array without using any array functions.
*/

$initArray = array(5, 8 , 4, 5, 5, 10, 20, 1);
$result = $initArray[0];

foreach ($initArray as $value) {
  echo "$value ";
  if ($value > $result) {
    $result = $value;
  }
}
echo "<br>";
echo $result;
 ?>
