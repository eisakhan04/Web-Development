<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';



//include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';

if(isset($_GET['id']))
{
   $id = $_GET['id'];
   
   $obj = new  database();
   $record = $obj->select("products" ,"*" , "id =$id");
   $obj->close();
   if(count($record) == 0)
   {
    echo "<script>alert('No Record Found')</script>";
    header('location: productview.php');
    exit();
   } 

}else{

    header("Location:view.php");
     exit();

}


//change and update  value
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];

    $updateData = [
         'name'=>$_POST['name'] , 
         'description'=>$_POST['description'] ,
         'brand'=>$_POST['brand'], 
         'price'=>$_POST['price'] ,
         'stock'=>$_POST['stock'], 
         'image_url'=>$_POST['image_url'] , 
         'added_on'=>$_POST['added_on'],
        
];


   //database obj create 
   $obj = new Database();

   // update data
   $result = $obj->update("products", $updateData, "id = $id");
   // close databse 
   $obj->close();

   if ($result > 0) {
       // Record updated successfully
       header("Location: productview.php");
       exit();
   } else {
       // Failed to update record
       echo "Error: Record not updated.";
   }



}

?>