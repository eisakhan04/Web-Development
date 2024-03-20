<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <!-- Bootstrap CSS offline -->
  <link rel="stylesheet" href="http://localhost/Softwear%20House/html%20and%20css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
<?php

include 'productUpdate.php';

?>
  <div class="container mt-5">
    <h2>Add Product</h2>

    <form action="productUpdate.php?id=<?= $id ; ?>" method="POST" >
      <div class="form-group">
        <label >Product Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $record[0]['name']; ?>" required>
      </div>

      <div class="form-group">
        <label >Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" value="<?= $record[0]['description']; ?>"  required></textarea>
      </div>
     
      <div class="form-group">
        <label >Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" value="<?= $record[0]['brand']; ?>" required>
      </div>

      <div class="form-group">
        <label >Price</label>
        <input type="number" class="form-control" id="price" name="price" value="<?= $record[0]['price']; ?>" required>
      </div>

      <div class="form-group">
        <label >Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="<?= $record[0]['stock']; ?>" required>
      </div>

      <div class="form-group">
        <label >Image URL</label>
        <input type="text" class="form-control" id="image_url" name="image_url"value="<?= $record[0]['image_url']; ?>" >
      </div>

      <div class="form-group">
        <label >Added On</label>
        <input type="date" class="form-control" id="added_on" name="added_on" value="<?= $record[0]['added_on']; ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>
</html>
