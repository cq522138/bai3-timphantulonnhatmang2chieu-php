<?php
$matrix = [
    [1, 6, 3],
    [14, 3, 4],
    [12, 39, 5],
    [20, 2, 6]
];
$max = $matrix[0][0];
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        if ($matrix[$i][$j] > $max) {
            $max = $matrix[$i][$j];
        }
    }
}
echo $max;