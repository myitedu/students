<?php
ini_set("display_errors",1);
//Create  Fibonacci numbers
//1, 1,2,3,5,8,13,21,34,55,89, 144,233,377...
$numbers = range(0,100);
foreach ($numbers as $pos=>$number){
    echo $numbers[$pos-1] + $numbers[$pos-2];
    echo "<hr>";
}

// Initialize the first two Fibonacci numbers
$fib = [1, 1];

// Generate Fibonacci numbers
for ($i = 2; $i < 100; $i++) {
    $fib[] = $fib[$i-1] + $fib[$i-2];
}

// Output the Fibonacci sequence
foreach ($fib as $number) {
    echo $number . "<hr>";
}






