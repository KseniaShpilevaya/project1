<?php
session_start();
if(!empty($_POST)) { 
    $_SESSION['useruser'] = ['surname' => $_POST['surname'],
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'salary' => $_POST['salary']];
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
        <form action="index.php" method="POST">
            <label for="surname">Фамилия:</label>
            <input name="surname" required>
            <label for="name">Имя:</label>
            <input name="name" required>
            <label for="age">Возраст:</label>
            <input name="age" type="number" required>
            <label for="salary">Зарплата:</label>
            <input name="salary" type="number" required>
            <input type="submit">
        </form>
        <form action="save.php"> 
            <input type="submit" value="Посмотреть список">
        </form>
    </body>
</html>
