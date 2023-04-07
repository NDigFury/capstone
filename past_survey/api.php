<?php

$have = $_POST['have'];
$title = $_POST['title'];
$description = $_POST['description'];
$length = $_POST['length'];
$time = $_POST['time'];
$difficulty = $_POST['difficulty'];
$entry = $_POST['entry'];
$email = $_POST['email'];

echo "Do you have a project idea? " . htmlspecialchars($have) . "<br>";
echo "Title: " . htmlspecialchars($title) . "<br>";
echo "Description: " . htmlspecialchars($description) . "<br>";
echo "How long did it take you to complete your project? " . htmlspecialchars($length) . "<br>";
echo "Does your project require more development? " . htmlspecialchars($time) . "<br>";
echo "Difficulty scale: " . htmlspecialchars($difficulty) . "<br>";
echo "File upload: " . htmlspecialchars($entry) . "<br>";
?>