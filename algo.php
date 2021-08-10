<?php

$input = [[1,6], [3,8], [5,7], [6,12]];

echo getMaxIntersections($input);
echo PHP_EOL . memory_get_peak_usage();

function getMaxIntersections(array $periods) {
    $sub1 = $sub2 = $max = $i = 0;
    foreach ($periods as $first) {
        if ($i > $max) {
            $max = $i;
        }
        $i = 0;
        foreach ($periods as $second) {
            $x1 = $first[0];
            $x2 = $first[1];
            $x3 = $second[0];
            $x4 = $second[1];
            if ($x1 < $x4 && $x2 > $x3) {
                $i++;
            }
        }
    }
    return $max;
}
