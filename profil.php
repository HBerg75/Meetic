

<?php
session_start();
require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello world !</p>
    <?php
    echo $_SESSION['email'];
    echo $_SESSION['nom'];
    ?>
</body>
</html>