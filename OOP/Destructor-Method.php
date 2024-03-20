<?php
class abc {
    //the destructor example is same as when we are create mysql conction and 
    //first connection and creeate all qury and and then close the coonection soo that is we are create with destructor 
    public function __construct(){
        echo "this is constructor function <br>";
    }

    public function show(){
        echo " my name is EISA <br>";

    }
    public function __destruct(){
        echo "this is destructor function " ;

    }
}

$a1 = new abc();
$a1->show();

?>