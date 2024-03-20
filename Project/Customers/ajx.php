<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';

if(isset($_POST['search'])){

    $search_value = $_POST["search"];

    $column = 'username';

    $like = "$column LIKE '%$search_value%'";

    $obj = new database();

    $data = $obj->select('customers', '*', $like);

    $obj->close();

}

$output = "";

foreach ($data as $row) {
    $output .= '<tr>';
    $output .= '<td>' . $row['id'] . '</td>';
    $output .= '<td>' . $row['username'] . '</td>';
    $output .= '<td>' . $row['password'] . '</td>';
    $output .= '<td>' . $row['email'] . '</td>';
    $output .= '<td>' . $row['first_name'] . '</td>';
    $output .= '<td>' . $row['last_name'] . '</td>';
    $output .= '<td>' . $row['address'] . '</td>';
    $output .= '<td>' . $row['phone_number'] . '</td>';
    $output .= '<td>' . $row['registered_on'] . '</td>';
    $profilePicPath = $row['profile_pic'];
    $output .= '<td>';
    if ($profilePicPath) {
        $output .= "<img src='$profilePicPath'  style='height: 50px; width: 50px; border-radius: 50px;'  > ";
    } else {
        $output .= 'No Image';
    }
    $output .= '</td>';
    $output .= '<td>';
    $output .= '<a href="edit.php?id=' . $row['id'] . '" class="btn btn-primary">Update</a>';
    $output .= '<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
    $output .= '</td>';
    $output .= '</tr>';
}

echo $output;

?>
