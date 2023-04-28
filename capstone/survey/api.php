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
$netID = $_POST['netID'];

$s ="";
$s .= htmlspecialchars($title) . ",";
$s .= htmlspecialchars($type) . ",";
$s .= htmlspecialchars($description) . ",";
$s .= htmlspecialchars($milestone) . ",";
$s .= htmlspecialchars($length) . ",";
$s .= htmlspecialchars($achieve) . ",";
$s .= htmlspecialchars($knowledge) . ",";
$s .= htmlspecialchars($help) . ",";
$s .= htmlspecialchars($difficulty) . ",";
$s .= htmlspecialchars($obstacles) . ",";
$s .= htmlspecialchars($resources) . ",";
$s .= htmlspecialchars($why) . ",";
$s .= htmlspecialchars($email) . ",";
$s .= htmlspecialchars($netID);

$f = fopen("../survey.csv", "a");
fwrite($f, "\n".$s);
fclose($f);
header( "Location: ../index.php");
?>