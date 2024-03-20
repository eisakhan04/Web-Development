<?php

include 'C:\xampp\htdocs\Softwear House\Project\databaseWithOOP.php';
 

$obj = new Database();

$data = $obj->select('products');


$obj->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/Softwear%20House/html%20and%20css/bootstrap-5.3.2-dist/css/bootstrap.min.css">



</head>
<body>
<div class="container mt-5">
    <h2>View Products</h2>

    <div class="m3">
             <input type="text" id="search" class="form-control" name="search" placeholder=" Search by name ">
    </div>

    <table  class="table table-striped container">
        <thead>
            <tr>
        
                <th>ID</th> 
                <th>Name</th>                   
                <th>Description</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image_url</th>
                <th>Added_on</th>
              
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody id="marksTableBody">
        <?php foreach ($data as $row): ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><?php echo $row["brand"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
        <td><?php echo $row["stock"]; ?></td>
        <td><?php echo $row["image_url"]; ?></td>
        <td><?php echo $row["added_on"]; ?></td>
 
            <td>
                <a href="productedit.php?id=<?= $row['id']; ?>" class="btn btn-primary" >Update</a>
                <a href="productdelete.php?id=<?= $row['id']; ?>" class="btn btn-danger" >Delete</a>
                
            </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<script src="http://localhost/Softwear%20House/Project/bootstrap-5.3.2-dist/Jquey/JQuery.js"></script>
<script>
    $(document).ready(function () {
        // Function to perform AJAX live search
        function liveSearch() {
            var searchValue = $("#search").val();

            $.ajax({
                type: "POST",
                url: "productAjx.php",
                data: { search: searchValue },
                success: function (data) {
                    $("#marksTableBody").html(data);
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: " + xhr.responseText);
                }
            });
        }

        // Call liveSearch function on keyup event in the search input
        $("#search").on("keyup", function () {
            liveSearch();
        });

        // Initial call to populate the table on page load
        liveSearch();
    });
</script>



        <script> src= "http://localhost/Softwear%20House/Project/bootstrap-5.3.2-dist/js/bootstrap.min.js"</script>
</body>
</html>
