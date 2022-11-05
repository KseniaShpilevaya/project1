<?php
session_start();
if(!empty($_GET)) {
    $_SESSION['surname'] = $_GET['surname'];
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['age'] = $_GET['age'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello</title>
    </head>
    <body>
        <form method="GET">
            <input name="surname" required>
            <input name="name" required>
            <input name="age" type="number" required>
            <input type="submit">
        </form>
    </body>
</html>
