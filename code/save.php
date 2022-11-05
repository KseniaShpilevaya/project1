<?php
session_start();
echo "<ul>";
	if (!empty($_SESSION['useruser'])) {
		foreach($_SESSION['useruser'] as &$userData) {
            echo "<li>".$userData."</li>";
        }
	}
echo "</ul>";