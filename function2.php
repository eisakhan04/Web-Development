<?php 

function hello($fname , $lname)
{
    $v = "$fname $lname ";
    return $v;

}

$name = hello("Eisa" , "Baloch");
echo $name;



?>