<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

# проверяем подключение
if (mysqli_connect_errno()) {
    printf('Can not connect to mysql server. Error code: %s', mysqli_connect_error());
    exit;
}

# запустила один раз, потому что категории не меняются
# $mysqli->query('INSERT INTO categories (category) VALUES ("cars")');
# $mysqli->query('INSERT INTO categories (category) VALUES ("other")');
# $mysqli->query('INSERT INTO categories (category) VALUES ("tea")');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avito</title>
</head>
<body>
<!-- была форма с полями (email, выбор категории(название выше созданных папок), заголовок объявления и текст объявления, кнопка Добавить). -->
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            
            <label for="category">Category</label>
            <select name="category" required>
            <?php
            if ($result = $mysqli->query('SELECT * from categories')) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value=".$row['category'].'>'.$row['category']."</option>";
                }
            }
            ?>
            </select>
            
            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
        </form> 
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Category</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php
                if ($result = $mysqli->query('SELECT * from ad')) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['category']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
