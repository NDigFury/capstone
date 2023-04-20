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
      <li><a href="https://uarizona.co1.qualtrics.com/jfe/form/SV_6RPvRifXIuqmQnA">Survey</a></li>
      <li><a href="past_survey/engine.html">Create Submission</a></li>
      <li><a href="contact/entry.php">Contact</a></li>
    </ul>
  </div>
  <div class="titleContainer">
    <h1 class="entryTitle">OPPORTUNITY MANAGEMENT SYSTEM</h1>
  </div>
  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Current')" id="defaultOpen">Current</button>
    <button class="tablinks" onclick="openTab(event, 'Past')">Past</button>
  </div>
  <div id="Current" class="tabcontent">
    <div class="tableContainer">
      <?php tableStatus(7); ?>
    </div>
  </div>
  <div id="Past" class="tabcontent">
    <div class="tableContainer">
      <?php tableStatus(6)?>
    </div>
  </div>
<?php
  function tableStatus($curCom) {
    echo "<table style=\"border-collapse: collapse;\">
    <thead>
    <tr>
    <th>Student Name(s)</th>
    <th>Project Title</th>
    <th>Description</th>
    <th>Timeframe</th>
    <th>Difficulty(1-5)</th>
    <th>Net ID</t>
    </tr>
    </thead>";
    echo "<tbody>\n\n";
    $f = fopen("survey.csv", "r");
    while (($line = fgetcsv($f)) !== false){
      //If the check is on, an eighth element will be present
      if(count($line) == $curCom) {
        echo "<tr>";
        $i = 1;
        foreach ($line as $cell) {
          if($curCom == 7) { //Removes eighth element
            if($i < $curCom ){
              echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            $i+=1;
          }
          else{
            echo "<td>" . htmlspecialchars($cell) . "</td>";
          }
        }
        echo "</tr>\n";
    }
    }
    fclose($f);
    echo "\n</tbody></table>";
  }
?>
<script>
  document.getElementById("defaultOpen").click(); //Open current when page loads.
  function openTab(event, status) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(status).style.display = "block";
  event.currentTarget.className += " active";
  }
</script>
</body>
</html>
