<?php
ini_set("display_errors",1);
function sortByLength($arr) {
	usort($arr, function($a, $b) {
		return strlen($a) - strlen($b);
	});
    print_r($arr);
}

sortByLength(["apple", "bannana", "mango", "hi"]);

function sortByLength2($arr) {
	array_multisort(array_map("strlen", $arr), $arr);
	echo "<br>";
	print_r($arr);
}

sortByLength2(["apple", "bannana", "mango", "hi"]);