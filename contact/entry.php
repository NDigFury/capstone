<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Opportunity System | University of Arizona</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js" defer></script>
</head>
<body>
<div class="redRow"></div>
  <div class="headerMain">
    <img class="logo" src="https://www.arizona.edu/sites/default/files/www_webheader-01.svg">
    <ul class="menuItems">
      <li><a href="https://www.arizona.edu/">Home</a></li>
      <li><a href="https://www.arizona.edu/about">About</a></li>
      <li><a href="https://news.arizona.edu/">News</a></li>
      <li><a href="../index.php">Table</a></li>
      <li><a href="../survey/engine.html">Survey</a></li>
      <li><a href="../past_survey/engine.html">Create Submission</a></li>
    </ul>
  </div>
  <br>
<main>
    <section id="contact">
        <form id="form" action="send_email.php" method="POST">
            <label for="name">Name</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Your name..">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="text" id="email" name="email" placeholder="Your email..">
            <br><br>
            <label for="message">Message</label>
            <br>
            <textarea id="message" name="message" placeholder="What would you like to know.." style="height:200px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>
</body>
</html>
