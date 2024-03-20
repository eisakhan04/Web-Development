<?php


$myArray = array();

// Push data into the array
array_push($myArray, "Element 1");
array_push($myArray, "Element 2");
array_push($myArray, 332);

// Display the array after pushing
echo "Array after pushing elements:\n";
print_r($myArray);

// Pop data from the array
$removedElement = array_pop($myArray);

// Display the removed element
echo "\nRemoved element: $removedElement\n";
echo "Array after popping element:\n";
print_r($myArray);

?>
