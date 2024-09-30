<?php
$arr = [];

function sumRound($num) {
    global $arr;
    $total_zeros = strlen((string) $num);
    $jon = (int) str_pad("1",$total_zeros,"0");

    $first_number = floor($num / $jon);
    $hundredth = $jon * $first_number;

    array_push($arr, $hundredth);

    $num -= $hundredth;

    if ($num<10){
        array_push($arr, ($num != 0 ? $num : ""));
        sort($arr);
        foreach($arr as $i) {
            echo $i . " ";
        }
        echo "<hr>";
        $arr = [];
    }else{
        sumRound($num);
    }
    
}

sumRound(101);// ➞ "1 100"

sumRound(1234);// ➞ "4 30 200 1000"

sumRound(54210);//; ➞ "10 200 4000 50000"
