<?php
function isFourLetters($arr) {
    $newArr = [];
      foreach($arr as $i) {
          if(strlen($i) == 4) {
              array_push($newArr, $i);
          }
      }
    print_r($newArr);
}

isFourLetters(["Tomato", "Potato", "Pair", "Jhon"]);