<?php
/*
Write a function that sums up all the members of an array and its sub-arrays. The members
are integers or subarrays and don’t need further verification. Sub-arrays could also have
arrays as members, the given array is multi-dimensional and has unlimited depth. Use only
native PHP, non-array related functions.
*/
$initArray = array(
  5, 4, 3,
  array( 5, 6, 7 ),
  2, 1, 5,
  array( 5, 2, 1 ),
  array( 5, 3, array( 5, 2, array( 5, 2, array( 5, 2, 1 ) ) ) ),
  7, 9, 4
);

$result = 0;

function sumArray($sumtArray) {
  $result = 0;
  foreach ($sumtArray as $value) {
    if (gettype($value) == 'array') {
      $result += sumArray($value);
    } else {
      $result += $value;
    }
  }
  return $result;
}

echo sumArray($initArray);
 ?>
