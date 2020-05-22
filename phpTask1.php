<?php
/*
Compose a script that shows a list of numbers from 1 to 30, each number on a separate line.
If the number is divisible by three, replace the number with the text „divisible by three“. If
the number is divisible by five, replace the number with the text „divisible by five“. If the
number is divisible by both three and five, display “divisible by three and five”.
*/

for ($i=1; $i <= 30 ; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "divisible by three and five";
  } elseif ($i % 3 == 0) {
    echo "divisible by three";
  } elseif ($i % 5 == 0) {
    echo "divisible by five";
  } {
    echo $i;
  }
  echo "<br>";
}
 ?>
