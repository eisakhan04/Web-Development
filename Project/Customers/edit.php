


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet"
    href="http://localhost/Softwear%20House/html%20and%20css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
<?php

include 'update.php';

?>

  <div class="container">
      <h2>User Edit Form</h2>
    <form action="update.php?id=<?= $id ; ?>" method="post">

    <div class="form-group">
        <label >Username:</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $record[0]['id']; ?>" required>
      </div>

      <div class="form-group">
        <label > Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $record[0]['username']; ?>" required>
      </div>

      <div class="form-group">
        <label >Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= $record[0]['password']; ?>" required>
      </div>

      <div class="form-group">
        <label >Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $record[0]['email']; ?>" required>
      </div>

      <div class="form-group">
        <label >First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name"  value="<?= $record[0]['first_name']; ?>" required>
      </div>

      <div class="form-group">
        <label >Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $record[0]['last_name']; ?>" required>
      </div>

      <div class="form-group">
        <label >Address:</label>
        <textarea class="form-control" id="address" name="address" rows="3" value="<?= $record[0]['address']; ?>"  required></textarea>
      </div>

      <div class="form-group">
        <label >Phone Number:</label>
        <input type="tel" class="form-control" id="phone_number" name="phone_number" value="<?= $record[0]['phone_number']; ?>" required>
      </div>

      <div class="form-group">
        <label >Registered On:</label>
        <input type="date" class="form-control" id="registered_on" name="registered_on" value="<?= $record[0]['registered_on']; ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>




  
</body>

</html>