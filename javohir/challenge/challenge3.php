<?php 
function combinations(...$numbers) {
	return array_reduce($numbers, function($sum, $n) {
        $n == 0 ? $n = 1: $n;
		return $sum * $n;
	}, 1);
}

echo combinations(6, 7, 0); // 120