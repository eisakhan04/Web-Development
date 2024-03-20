<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';

if(isset($_POST['search'])){

    $search_value = $_POST["search"];

    $column = 'name';

    $like = "$column LIKE '%$search_value%'";

    $obj = new database();

    $data = $obj->select('products', '*', $like);

    $obj->close();

}

$output = "";

foreach ($data as $row) {
    $output .= '<tr>';
    $output .= '<td>' . $row['id'] . '</td>';
    $output .= '<td>' . $row['name'] . '</td>';
    $output .= '<td>' . $row['description'] . '</td>';
    $output .= '<td>' . $row['brand'] . '</td>';
    $output .= '<td>' . $row['price'] . '</td>';
    $output .= '<td>' . $row['stock'] . '</td>';
    $output .= '<td>' . $row['image_url'] . '</td>';
    $output .= '<td>' . $row['added_on'] . '</td>';
   
    $output .= '</td>';
    $output .= '<td>';
    $output .= '<a href="productedit.php?id=' . $row['id'] . '" class="btn btn-primary">Update</a>';
    $output .= '<a href="productdelete.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
    $output .= '</td>';
    $output .= '</tr>';
}

echo $output;

?>
