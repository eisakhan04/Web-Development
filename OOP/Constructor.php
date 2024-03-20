<?php  
//start code 
class person{
    public $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    function show()
    {
        echo "Your Name ".$this->name."<br>";

    }
}

$obj = new person("eisa");
 $obj->show();
//end code 

echo "2: code <br>";
//second start code
class man{
    public $name ;
    public $age;
    public $salary;
    function Show2()
    {
        echo $this->name ." - ". $this->age . " - ".$this->salary." <br>";
    }

}
$p1 = new man();
$p1->name ="Eisa ";
$p1->age = 21;
$p1-> salary = 34400;
echo $p1->Show2();

//End code 

//third code 
class data{
    public $name ,$cnic , $fname ,$occopution;
    //
    function __construct($n , $c , $f , $o)
    {
       $this->name = $n;
       $this->cnic = $c;
       $this->fname = $f;
       $this -> occopution = $o;
    } 
    //in class function for show
    function show3()
    {
        echo $this->name." - " . $this->cnic. " - ". $this->fname." - " . $this->occopution."<br>";
    }
}


//class object 
$data =  new data("Eisa " , 21312231 ,  "juma khan" ,"student" );
$data->show3();
//echo $data->show3();

//third end code



echo "boy class <br>";
// set default value
class boy{
    public $name = "no name " ;
    public $age = 0;
    public $salary = 0;
    function __construct( $name="no name " ,$age= 0 ,   $salary=0)
    {
         $this->name = $name;
         $this -> age= $age ;
         $this -> salary = $salary; 
    }
    function Show5()
    {
        echo $this->name ." - ". $this->age . " - ".$this->salary." <br>";
    }

}
$p2 = new boy();
$p2 -> Show5();
$p3 = new boy("eisa" , 21 , 2000);
$p3-> Show5();
$p4 = new boy("zeshan" , 21 , 2000);
$p4-> Show5();
//$p1->name ="Eisa ";
//$p1->age = 21;
//$p1-> salary = 34400;
//echo $p1->Show2();

?>