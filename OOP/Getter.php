<?php

class bde{
     private $data = ["name"=>"codingWithEisa" , "course"=>"PHP" , "free"=>"200"];

   public function __get($key){
   if(array_key_exists($key , $this->data)){
       return $this->data[$key];
   }else{
           return "this key ($key) is not defined.";
   }
   }
}

$test = new bde();
//$test->name;
//print_r($test->data);
echo $test->name;

   ?>