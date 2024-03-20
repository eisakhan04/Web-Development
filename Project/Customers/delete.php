<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $obj = new database();

    $data =  $obj->delete("customers", "id = $id");

    $obj->close();


    if ($data > 0) {

        header("Location: view.html ");

        exit();
    }
} else {
    echo "error";
    //header("Location: view.php");

    exit();
}
