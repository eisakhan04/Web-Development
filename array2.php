<?php

$numbers = array(5, 10, 15, 20);

$sum = array_sum($numbers);

echo "Sum of the array elements: " . $sum;

// other code of array  in PHP


$numbers = array(5, 10, 15, 20);


$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

// show the result
echo "Sum of the array elements: " . $sum;



?>