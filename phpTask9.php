<?php
/*
Below is program for calculating results for dart game. Results are calculated by average of
three throws. Unfortunately program does not return correct answer. Fix the code.
*/
$scores = [
  "John" => [7, 8, 7],
  "Sue" => [10, 8, 4],
  "Tommy" => [8, 8, 7],
  "Mary" => [7, 6, 6]
  ];
$averages = [];
$places = [];

foreach($scores as $player => $values) {
  $averages[$player] = ($values[0] + $values[1] + $values[2]) / 3;
}

arsort($averages);
$place = 0;
$lastscore = null;

foreach($averages as $player => $average) {
  if ($lastscore == $average) {
    echo sprintf("Place %s (tie) - %s\n", $place, $player);
  } else {
    $place++;
    echo sprintf("Place %s - %s\n", $place, $player);
  }
  $lastscore = $average;
}
 ?>
