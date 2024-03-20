<?php

class parents{
    public $name = "Parent class <br>";
     
    public function math( $x , $y)
    {
            return $x * $y;
    }
}
class child extends parents {
    public $name = "child class";


    public function math ($x , $y){
        return $x / $y;
    }
}
//properties overriding 
$test = new child();
echo $test->name. "<br>"; // Output: child class
$obj =  new parents();
echo  $obj -> name . "<br>";// Output : Parent class

//function overriding 

$r = new parents();
echo $r->math( 3 ,5 )."<br>";

$S = new child();
echo $S -> math(10 ,2); 

?>