<?php
/*
Implement a “groupByAuthor” method that returns an associative array containing an array
of book names for each author. Input array is:
[
“Learning PHP” => “John Smith”,
“Understanding relational databases” => “Mary Little”,
“Freelancers” => “Robin Round”
“I love LISP” => “Mary Little”,
“Python for dummies” => John Smith”,
];
Expected result is (sorting order is not important):
[
“John Smith” => [“Learning PHP”, “Python for dummies”],“Mary Little” => [“Understanding relational databases”, “I love LISP”],
“Robin Round” => [“Freelancers”]
];
*/
$initArray = [
"Learning PHP" => "John Smith",
"Understanding relational databases" => "Mary Little",
"Freelancers" => "Robin Round",
"I love LISP" => "Mary Little",
"Python for dummies" => "John Smith",
];

$result = array();

foreach ($initArray as $key => $value){
  if (array_key_exists($value , $result)) {
    $i = $result[$value];
    array_push($i, $key);
    $result[$value] = $i;
  } else {
    $result[$value] = array($key);
  }
}

foreach ($result as $key => $value) {
  echo "\"$key\"=>[";
  for ($i=0; $i < count($value); $i++) {
    if ($i == 0) {
      $y = $value[$i];
      echo "\"$y\"";
    } else {
      $y = $value[$i];
      echo ",\"$y\"";
    }
  }
  echo "]";
  echo "<br>";
}
 ?>
