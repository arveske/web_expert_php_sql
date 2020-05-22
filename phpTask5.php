<?php
/*
Consider the following code:

$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}

The output will be:
"yabadabadoo" does not contain "yaba"

Why? How can this code be fixed to work correctly?
*/

/*
0 is false / 1 is true
*/
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2) !== false)  {
echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
 ?>
