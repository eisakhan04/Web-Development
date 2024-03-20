<?php 

class calculate {
      
    public $a;
    public $b;
    public $c;
    function __construct($a , $b  )
    {
            $this-> a = $a;
            $this-> b = $b;
            //$this-> c = $c;
    }
    function add()
    {
         $this-> c= $this->a + $this->b ;
         return $this-> c;
    }

}

$add = new calculate(1 , 2);
echo $add -> add();




?>