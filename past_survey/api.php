<?php
$names = $_POST['names'];
$title = $_POST['title'];
$description = $_POST['description'];
$length = $_POST['length'];
$difficulty = $_POST['difficulty'];
$studentID = $_POST['studentID'];
$check = $_POST['check'];

$s ="";
$s .= htmlspecialchars($names) . ",";
$s .= htmlspecialchars($title) . ",";
$s .= htmlspecialchars($description) . ",";
$s .= htmlspecialchars($length) . ",";
$s .= htmlspecialchars($difficulty) . ",";
if(strlen(htmlspecialchars($check)) > 0) { // Check is 'on'
    $s .= htmlspecialchars($studentID) . ",";
    $s .= htmlspecialchars($check);
}
else {
    $s .= htmlspecialchars($studentID);
}
$f = fopen("../survey.csv", "a");
fwrite($f, "\n".$s);
fclose($f);
header( "Location: ../index.php");
?>