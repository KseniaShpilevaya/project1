<?php
function redirectToHome(): void 
{
	header('Location: /');

	exit();
}

if (false === isset($_POST['email'], $_POST['category'],  $_POST['title'], $_POST['description'])) {
	redirectToHome();
} // обработка, когда чего-то не хватает

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf('Can not connect to mysql server. Error code: %s', mysqli_connect_error());
    exit;
}

$query = "INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssss", $email, $title, $desc, $category);
$stmt->execute();

redirectToHome();
