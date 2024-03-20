<?php

//empty Array
$array = array();
//push data in arraay 
array_push($array, "eisa");
array_push($array, "dani");
array_push($array, 12);
array_push($array , 3.0);

echo "after pushing data in array<br> ";

print_r($array);
echo "<br>";
echo "pop data in the array :<br>";
$remove = array_pop($array);
print_r($array);





?>