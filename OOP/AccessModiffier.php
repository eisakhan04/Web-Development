<?php
class base {
    private $name;
    
    public function __construct($n){
        $this -> name = $n;
    }

    public function show()
    {
        echo "Your name is :" .$this->name."<br>";
    }

}
class drived extends base{
    public function get()
    {
        echo "Your name is : " .$this->name."<br>";
    }
}

$a = new drived(" Eisa ");
//$a ->name ="coding";
$a->get();


?>