<?php

$title = $_POST['title'];
$type = $_POST['type'];
$description = $_POST['description'];
$why = $_POST['why'];
$milestone = $_POST['milestone'];
$length = $_POST['length'];
$resources = $_POST['resources'];
$achieve = $_POST['achieve'];
$obstacles = $_POST['obstacles'];
$help = $_POST['help'];
$difficulty = $_POST['difficulty'];
$knowledge = $_POST['knowledge'];
$email = $_POST['email'];
$studentID = $_POST['studentID'];

echo "Title: " . htmlspecialchars($title) . "<br>";
echo "Type: " . htmlspecialchars($type) . "<br>";
echo "Description: " . htmlspecialchars($description) . "<br>";
echo "Why have you chosen this project? " . htmlspecialchars($why) . "<br>";
echo "What is your project's key milestone? " . htmlspecialchars($milestone) . "<br>";
echo "How long do you think it will take to complete? " . htmlspecialchars($length) . "<br>";
echo "Third-party resources: " . htmlspecialchars($resources) . "<br>";
echo "What does your customer/user want to achieve? " . htmlspecialchars($achieve) . "<br>";
echo "What obstacles the project will have? " . htmlspecialchars($obstacles) . "<br>";
echo "Multiple people required: " . htmlspecialchars($help) . "<br>";
echo "Difficulty scale: " . htmlspecialchars($difficulty) . "<br>";
echo "What kind of knowledge is required? " . htmlspecialchars($knowledge) . "<br>";
echo "Student ID: " . htmlspecialchars($studentID) . "<br>";
?>