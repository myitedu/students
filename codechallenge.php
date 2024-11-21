<?php
function neighboring($str) {
    // Convert the string to an array of characters
    $chars = str_split($str);

    // Iterate through the string, checking neighbors
    for ($i = 0; $i < count($chars); $i++) {
        if ($i > 0) { // Check the left neighbor
            $left_diff = abs(ord($chars[$i]) - ord($chars[$i - 1]));
            if ($left_diff != 1) {
                return false;
            }
        }
        if ($i < count($chars) - 1) { // Check the right neighbor
            $right_diff = abs(ord($chars[$i]) - ord($chars[$i + 1]));
            if ($right_diff != 1) {
                return false;
            }
        }
    }
    return true;
}

echo "<pre>";

// Test cases
var_dump(neighboring("aba")); // ➞ true
var_dump(neighboring("abcdedcba")); // ➞ true
var_dump(neighboring("efghihfe")); // ➞ false
var_dump(neighboring("abc")); // ➞ true
var_dump(neighboring("qrstuv")); // ➞ true
var_dump(neighboring("mnopqrstsrqponm")); // ➞ true
