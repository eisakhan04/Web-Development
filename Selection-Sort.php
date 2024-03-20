<?php
// Original array
$arr = [64, 25, 12, 22, 11];
echo "Original Array: ";
foreach ($arr as $value) {
    echo $value . " ";
}
echo "\n";

// Selection Sort Algorithm
$n = count($arr);

// Traverse through all array elements
for ($i = 0; $i < $n - 1; $i++) {
    // Find the minimum element in unsorted array
    $min_index = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$j] < $arr[$min_index]) {
            $min_index = $j;
        }
    }

    // Swap the found minimum element with the first element
    $temp = $arr[$min_index];
    $arr[$min_index] = $arr[$i];
    $arr[$i] = $temp;
}

// Sorted array
echo "Sorted Array: ";
foreach ($arr as $value) {
    echo $value . " ";
}
echo "\n";
?>
