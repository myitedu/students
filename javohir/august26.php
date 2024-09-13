<?php
echo "<pre>";
function search($arr, $item) {
    $result = array_search($item,$arr);
    if (!$result){
        echo "-1";
    }else{
        var_dump($result);
    }

    echo "\n";
}
search([1, 5, 3], 5);// ➞ 1

search([9, 8, 3], 3);// ➞ 2

search([1, 2, 3], 4);// ➞ -1
// >>>>>>> 6dd73cfdf211dc8b67f22e6d81724263f030712a
