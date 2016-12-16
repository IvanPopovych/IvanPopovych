<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ivan Popovych web-developer</title>
        <link href="images/wp-logo.png" rel="icon" />
        <link href="css/style-home.css" rel="stylesheet"/>
        <link href="css/media.css" media="(max-width: 1150px) and (min-width: 750px)" rel="stylesheet" />
        <link href="css/media-xs.css" media="(max-width: 750px)" rel="stylesheet" />
    </head>
    <body>
        <!--
        =======================================Home page =======================-->
        <div id="home">
            <nav>
                <a href="#">Home</a>
                <a href="skills.php">Skills</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="resume.php">Resume</a>
                <a href="contact.php">Contact</a>
            </nav>
           
        <?php
            require_once "blocks/mainContent.php";
        ?>
    
    </body>
</html>