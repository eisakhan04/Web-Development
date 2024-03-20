<!-- ak array decleare karna 5 number  -->
<!-- find the largest number in array with while loop -->
<!-- and read the linear search -->
<?php  

$array =  [1,2,3,4,5,6,7,8,9];
$i=0;
$user = 9;
while($i <= 8)
{
    if($array[$i] == $user)
    {
      echo "array find";
    }
    else{
        echo "array not find";
    }
      $i++;

}




?>