<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';


$obj = new Database();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$registered_on = $_POST['registered_on'];
$profile_pic = $_POST['profile_pic'];

$value = [
          "username"=>$username ,
          "password"=>$password ,
          "email"=>$email ,
          "first_name"=>$first_name , 
          "last_name"=>$last_name , 
          "address"=>$address , 
          "phone_number"=>$phone_number ,
          "registered_on"=>$registered_on ,   
          "profile_pic"=>$profile_pic ,   
        ];

if($obj->insert("customers",$value)){
    echo "<h2>Data Inserted Successfully.</h2>";
}else{
    echo "<h2>Data is Not Inserted Successfully.</h2>";
}

?>
