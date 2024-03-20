<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';



//include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';

if(isset($_GET['id']))
{
   $id = $_GET['id'];
   
   $obj = new  database();
   $record = $obj->select("customers" ,"*" , "id =$id");
   $obj->close();
   if(count($record) == 0)
   {
    echo "<script>alert('No Record Found')</script>";
    header('location:view.html');
    exit();
   } 

}else{

    header("Location:view.html");
     exit();

}


//change and update  value
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];

    $updateData = [
         'username'=>$_POST['username'] , 
         'password'=>$_POST['password'] ,
         'email'=>$_POST['email'], 
         'first_name'=>$_POST['first_name'] ,
         'last_name'=>$_POST['last_name'], 
         'address'=>$_POST['address'] , 
         'phone_number'=>$_POST['phone_number'],
         'registered_on'=>$_POST['registered_on'],
         'profile_pic'=>$_POST['profile_pic']
];


   //database obj create 
   $obj = new Database();

   // update data
   $result = $obj->update("customers", $updateData, "id = $id");
   // close databse 
   $obj->close();

   if ($result > 0) {
       // Record updated successfully
       header("Location: view.html");
       exit();
   } else {
       // Failed to update record
       echo "Error: Record not updated.";
   }



}

?>