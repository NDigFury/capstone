<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Opportunity System | University of Arizona</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="redRow"></div>
  <div class="headerMain">
    <img class="logo" src="https://www.arizona.edu/sites/default/files/www_webheader-01.svg">
    <ul class="menuItems">
      <li><a href="https://www.arizona.edu/">Home</a></li>
      <li><a href="https://www.arizona.edu/about">About</a></li>
      <li><a href="https://news.arizona.edu/">News</a></li>
    </ul>
  </div>
  <div class="titleContainer">
    <h1 class="entryTitle">OPPORTUNITY MANAGEMENT SYSTEM</h1>
  </div>
  <div class="tableContainer">
        <table>
        <thead>
        <tr>
        <th><div> Student Name(s) (Last, First) </div></th>
        <th><div> Project Title </div></th>
        <th><div> Year </div></th>
        <th><div> Report URL </div></th>
        </tr>
        </thead>
    <?php
      echo "<tbody>\n\n";
      $f = fopen("survey.csv", "r");
      while (($line = fgetcsv($f)) !== false){ 
        echo "<tr>";
        foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
      }
      echo "</tr>\n";
      }
      fclose($f);
      echo "\n</tbody></table>";
      ?>
  </div>
</body>

</html>