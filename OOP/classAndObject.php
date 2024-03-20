<?php

class callculation{

   public $a, $b, $c;

     function add( )
   {
         $this->a = $this->b + $this->c;
         return $this->a;

   }

   function sub()
   {
        $this->a = $this->b - $this->c; 
        return $this->a;

   }
       
}

        $obj1 = new callculation();

         $obj1->b = 20;
         $obj1->c = 20;
      
         $obj2 = new callculation();

         $obj2->b = 30;
         $obj2->c = 20;

         echo "sum of value obj1 : ".$obj1->add() ."<br>";
         echo "sum of value  obj2 : ".$obj2->sub()."<br>";
         echo "sum of value  obj1 : ".$obj1->sub()."<br>";
         
        
         


     
       



?>