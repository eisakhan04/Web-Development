<?php

class student{
    public $name;

    public function setvalue($n){
        $this->name = $n;

    }

    public function getvalue(){
       return  $this->name;
    }

}

$obj = new student();

$obj->setvalue("Eisa");
  echo $obj->getvalue();
  
?>