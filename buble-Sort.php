<?php 
// bubble sort complexity o(n2) o n squre.

// array which we want to sort 
$arr = [20,5,6,8 ,66,77,22,11,8,1,78, 99];
$lenght =count($arr);

for($i=0; $i<$lenght ; $i++){
    for ($j=0; $j <($lenght-1-$i); $j++){
        if ($arr[$j] > $arr[$j+1])
        {
            $temp = $arr[$j]; //temp = 20
            $arr[$j] = $arr[$j+1]; // arr[0] = 5
            $arr[$j+1]=$temp;     // arr[1] = 20
        }
    }
}

echo "Sorted Data: \n";
print_r($arr);



?>