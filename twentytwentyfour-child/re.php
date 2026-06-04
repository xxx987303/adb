<?php
// Define the strings
$string1 = "chrome safari";
$string2 = "unknown text, but for sure no  safari";

// Define the regular expression pattern
$pattern = '/^(?!.*\bchrome\b).*safari.*$/';

// Match the pattern against the strings
$match1 = preg_match($pattern, $string1);
$match2 = preg_match($pattern, $string2);

// Check if the pattern matched
echo $match1 ? 'True' : 'False';  // Output: False
echo "\n";
echo $match2 ? 'True' : 'False';  // Output: True
?>
