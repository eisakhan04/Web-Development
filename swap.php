<?php
$a = 50;
$b = 30;

echo "Before swap";
echo "<br>";
echo "Value of a is : $a ";
echo "<br>";
echo "Value of b is : $b ";
echo "<br><br>";
// Swapping the values with out using third variable 
echo "after swaping ";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "<br>";
echo "value of a is :".$a;
echo "<br>";
echo "value of b is :".$b;



?>
