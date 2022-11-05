<!DOCTYPE html>
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
                $folders = "categories";
                $categories = scandir($folders);
                foreach($categories as $category) {
                    if (($category != '.') && ($category != "..")) {
                        echo "<option value=".$category.'>'.$category."</option>";
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
                    foreach($categories as $category) {
                        if (($category === '.') || ($category === '..')) {
                            continue;
                        }
                        $categoryPath = "categories/{$category}";
                        $emailsInCategory = scandir($categoryPath);
                        foreach($emailsInCategory as $email) {
                            if (($email === '.') || ($email === '..')) {
                                continue;
                            }
                            $emailFolder = "categories/{$category}/{$email}";
                            $advertisements = scandir($emailFolder);
                            foreach($advertisements as $adv) {
                                if (($adv === '.') || ($adv === '..')) {
                                    continue;
                                }
                                $advPath = "categories/{$category}/{$email}/{$adv}";
                                $advFile = fopen($advPath, "r");
                                $descr = file_get_contents($advPath);
                                fclose($advFile);
                                echo "<tr>";
                                echo "<td>{$category}</td>";
                                echo "<td>{$email}</td>";
                                echo "<td>".substr($adv, 0, -4)."</td>";
                                echo "<td>{$descr}</td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
