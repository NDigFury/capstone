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
<header>
    <nav>
        <ul>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    </section>
    <section id="projects">
        <h1>Projects</h1>
        <div class="project">
            <h2>Project Template</h2>
            <p>Will be SQL infomration from the below form</p>
            <p>Example</p>
            <p>Project type: Capstone Spring 2023</p>
            <p>Basic description and names of the people</p>
            <p>maybe an image of what they made</p>
            <a href="srw.rjwebz.net">Opportunity Management System</a>
        </div>
    </section>
    <section id="contact">
        <h1>Form for your project:</h1>
        <form action="send_email.php" method="post" enctype="multipart/form=data"> <br>
            <label for="name">Title:</label>  <br>
            <input type="text" id="name" name="name" required>  <br><br>
            <label for="email">Contact Email:</label>  <br>
            <input type="email" id="email" name="email" required>  <br><br>
            <label for="message">Description:</label>  <br>
            <textarea id="message" name="message" required></textarea>  <br><br>
            <label for="website">Website:</label>  <br>
            <textarea id ="website" name="website"></textarea>  <br><br>
            <label for="file">Image:</label>  <br>
            <input type="file" name="fileToUpload" id="fileToUpload">  <br><br>
            <button type="submit">Send Project</button>
        </form>
    </section>
</main>
<br>
<br>
<br>
<br>
<footer>
    <p>&copy; 2023 Nikki Diguardi & Steven Werden. All rights reserved.</p>
</footer>
</body>
</html>
