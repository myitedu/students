<?php
echo "<pre>";

function sumRound($num) {
    $dig = (string) $num;
    $total_zeros = strlen($dig);
    $jon = (int) str_pad("1",$total_zeros,"0");

    $remainder = $num % 10;


    $first_number = floor($num / $jon);
    $hundredth = $jon * $first_number;

    $num = $num - $hundredth;

    if ($num<10){
        return $num;
    }else{
        sumRound($num);
    }


    echo $num."<hr>";

    echo "<hr>";



}

sumRound(101);// ➞ "1 100"

sumRound(1234);// ➞ "4 30 200 1000"

sumRound(54210);//; ➞ "10 200 4000 50000"