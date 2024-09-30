<?php
ini_set('display_errors', 1);

echo "<pre>";
function rowSum($number) {
    $total = 0;
	for($i = 1; $i <= $number; $i++ ){
        $total += $number*($number-1)/2+$i;
    }
    echo $total . "<br>";
}

rowSum(4);// ➞ 34

// function happyYear($year) {
// 	$yearStr = (string) ++$year;
//     $arr = str_split($yearStr);
//     $arr = array_unique($arr);
//     print_r(count($arr)== 4 ? $year:happyYear($year));

// }

// happyYear(2017); // ➞ 2018 

// function combinations(...$numbers) {
// 	return array_reduce($numbers, function($sum, $n) {
//         $n == 0 ? $n = 1: $n;
// 		return $sum * $n;
// 	}, 1);
// }

// echo combinations(6, 7, 0); // 120
