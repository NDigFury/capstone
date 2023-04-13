<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Opportunity System | University of Arizona</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        section {
            padding: 2rem;
        }

        .project {
            background-color: #f4f4f4;
            margin: 1rem 0;
            padding: 1rem;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 55px;
        }

        .footerBlock {
        padding:65px;
        }

        /* Removes bullets from lists in entry page */
        ul {
        list-style-type: none
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../past_survey/engine.html">Project Completed Submit</a></li>
            <li><a href="../survey/engine.html">Survey</a></li>
        </ul>
    </nav>
</header>
<main>
    </section>
    <section id="projects">
        <h1>Projects</h1>
        <div class="project">
            <!-- do we want the table for past surveys here? -->    
            <!--<a href="http://srw.rjwebz.com">Opportunity Management System</a>-->
        </div>
    </section>
    <section id="contact">
        <form id="form" action="send_email.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="What would you like to know.." style="height:200px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>
<br>
<footer>
    <p>&copy; 2023 Nikki Diguardi & Steven Werden. All rights reserved.</p>
</footer>
</body>
</html>
