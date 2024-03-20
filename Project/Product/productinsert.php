<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';


$obj = new Database();

$name = $_POST['name'];
$description = $_POST['description'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$image_url = $_POST['image_url'];
$added_on = $_POST['added_on'];

$value = [
          "name"=>$name ,
          "description"=>$description ,
          "brand"=>$brand ,
          "price"=>$price , 
          "stock"=>$stock , 
          "image_url"=>$image_url , 
          "added_on"=>$added_on ,
          
        ];

if($obj->insert("products",$value)){
    echo "<h2>Data Inserted Successfully.</h2>";
}else{
    echo "<h2>Data is Not Inserted Successfully.</h2>";
}

?>
