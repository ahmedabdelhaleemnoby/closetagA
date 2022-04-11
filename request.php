<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:<?php echo @$_GET['color']; ?>">
    <h1>welcome <?php echo @$_GET['edit']; ?></h1>
    <?php
    if (isset($_GET['edit'])) {
        echo $_GET['edit'] . " " . @$_GET['username'];
    }
    ?>
</body>

</html>