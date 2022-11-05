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

$folderPath = "categories/{$category}/{$email}";

if (false === file_exists($folderPath)) {
    mkdir("categories/{$category}/{$email}", 0777);
}

$filePath = "categories/{$category}/{$email}/{$title}.txt";

if (false === file_put_contents($filePath, $desc)) {
	throw new Exceprion("Something went wrong");
}
redirectToHome();
