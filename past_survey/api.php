<?php
// This script is for parsing the data from the 'create submission' survey form and writing it into our 'database' (survey.csv)
$names = $_POST['names'];
$title = $_POST['title'];
$description = $_POST['description'];
$url = $_POST['url'];
$netID = $_POST['netID'];
$check = $_POST['check'];

$s ="";
$s .= htmlspecialchars($names) . ",";
$s .= htmlspecialchars($title) . ",";
$s .= htmlspecialchars($description) . ",";
$s .= htmlspecialchars($url) . ",";
if(strlen(htmlspecialchars($check)) > 0) { // Check is 'on'
    $s .= htmlspecialchars($netID) . ",";
    $s .= htmlspecialchars($check);
}
else {
    $s .= htmlspecialchars($netID);
}
$f = fopen("../survey.csv", "a");
fwrite($f, "\n".$s);
fclose($f);
header( "Location: ../index.php");
?>
