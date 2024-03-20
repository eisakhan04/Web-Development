<?php
trait test{
    public function hi(){
        echo " say haye <br>";
    }
    public function eisa (){
        echo " Hi Eisa baloch <br>";

    }

}

trait info{
    public function friends(){
        echo "hi eisa , zeshan , dani , faheem <br> ";
    }
}
class C{
    use test;
    use info;
}
class D{
    use test;
    use info;

}

  $obj = new C();
  $obj->hi();
  $obj0 = new D();
  $obj0->eisa();
  $friend = new C();
  $friend-> friends();



  //Other code traits with over ridding 
 echo "Other code traits with over ridding <br>";
 trait hello {
    private function sayhello(){
        echo "Hello Form Trait <br>";
    }

 }
//  trait trait2{
//     public function sayhello(){
//         echo " hello from trait 2";
//     }

//  }
 
 class A{
    use hello{
        hello::sayhello as public newhello;
    } 
    
    
    //, trait2{
    //     hello::sayhello insteadof trait2;
    //     trait2::sayhello as newhello;
    }
   

 
//  class B extends A {
//     use hello;
//     public function sayhello()
//     {
//         echo "hello from B class<br>";
//     }

//  }

//  $b = new B();
//  $b-> sayhello();

 $a = new A();
 $a-> newhello ();
 










?>