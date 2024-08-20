<?php
ini_set("display_errors",1);
echo "<pre>";
function programmers($one, $two, $three) {
    $large = 0; $small = 0;
    //get the highest wage
    if ($one>=$two && $one>=$three){
        $large = $one;
    }else if ($two>=$one && $two>=$three){
        $large = $two;
    }else if ($three>=$one && $three>=$two){
        $large = $three;
    }
    //get the smallest wage
    if ($one<=$two && $one<=$three){
        $small = $one;
    }else if ($two<=$one && $two<=$three){
        $small = $two;
    }else if ($three<=$one && $three<=$two){
        $small = $three;
    }

    echo $large - $small;
    echo "<hr>";

}

programmers(1,  5, 9); //->>> 8
programmers(43, 33, 43); //->>> 10
programmers(88, 14, 23); //->>> 74
programmers(33, 72, 74); //->>> 41
programmers(147, 33, 526); //->>>493
programmers(234, 345, 457); //->>> 223