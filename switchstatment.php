<?php    

$n = 0;
switch(true)
{
    case ($n>0):
        echo "positive";
        break;
    case ($n<0):
        echo "negative";
           break; 
    case($n==0):
        echo "zero";
        break;
    default:
         echo "not a number";    
}


?>