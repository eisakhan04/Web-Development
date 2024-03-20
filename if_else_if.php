<?php

$c = "";

if (isset($_GET['sub'])) {
    $n = $_GET['name'];

    if (is_numeric($n)) {
        if ($n > 0) {
            $c = "Positive";
        } else if ($n < 0) {
            $c = "Negative";
        } else {
            $c = "Zero";
        }
    } else {
        $c = "Not a number";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="">
        <input type="text" name="name" placeholder="Enter number ">
        <input type="submit" name="sub">
        <?php echo $c . "<br>"; ?>
    </form>
</body>

</html>
