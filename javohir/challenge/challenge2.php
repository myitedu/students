<?php
function happyYear($year) {
	$yearStr = (string) ++$year;
    $arr = str_split($yearStr);
    $arr = array_unique($arr);
    print_r(count($arr)== 4 ? $year:happyYear($year));

}

happyYear(2017); // ➞ 2018 
