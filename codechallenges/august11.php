<?php
ini_set("display_errors",1);

echo "<pre>";
function factorGroup($num) {
    $factors = 0;
    for($i=1; $i<=$num; $i++){
        $jon = $num/$i;

        if (is_int($jon)) {
            $factors++;
        }
    }

    echo ($factors%2===0)?'even':'odd';
    echo "<hr>";

}

factorGroup(12);

    //even
 factorGroup(33);

    //odd
 factorGroup(36);

    //even
 factorGroup(7);

    //odd
 factorGroup(1);

    //even
 factorGroup(19);

    //even
 factorGroup(27);

    //odd
 factorGroup(100);

    //even
 factorGroup(18);

    //odd
 factorGroup(16);
