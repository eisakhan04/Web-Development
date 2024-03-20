<?php

session_start();

// Initialize the array if not already initialized
if (!isset($_SESSION['myArray'])) {
    $_SESSION['myArray'] = array();
}

// Check if data is submitted
if (isset($_POST['newdata'])) {
    $newdata = $_POST['newdata'];

    // Push the new element into the array
    array_push($_SESSION['myArray'], $newdata);
} elseif (isset($_POST['pop'])) {
    // Pop the last element from the array
    array_pop($_SESSION['myArray']  );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Data Push in PHP</title>
</head>
<body>

    <h2>Array Elements</h2>
    <ul>
        <?php
        // Display array elements
        foreach ($_SESSION['myArray'] as $data) {
            echo "<li>$data</li>";
        }

        ?>
    </ul>

    <form method="post">
        <label for="newElement">Add New data:</label>
        <input type="text" name="newdata">
        <input type="submit" value="Add">
        <button type="submit" name="pop">Pop</button>
    </form>

</body>
</html>
