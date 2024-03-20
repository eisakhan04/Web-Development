<?php

 class A {
    public function a(){

        echo  "Hello this is A class  <br>";
    }
 }
 class B extends A {
    public function b(){
        echo "hello this is B class  <br>";

    }
 }
 class C extends B {
    public function c(){
        echo "hello this is C class   <br>";
    }
 }
class D extends C{
    public function d(){
        echo "This is D class   <br>";

    }
}
class E extends D {
    public function e(){
        echo  "This is E Class   <br>" ;
    } 
    
}
class F extends E {
    public function f(){
        echo "this is F class  <br>";
    }
}

class G extends F{
    public function g()
    {
        echo "this is G class <br>";
    }
}


$obj = new G();
$obj -> f();
$obj -> e();
$obj -> d();
$obj -> c();
$obj -> b();
$obj-> a();l



?>