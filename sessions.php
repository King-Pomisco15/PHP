<?php
    // sessions = SGB used to store information on a user
    // to be used across multiple pages.
    // A user is assigned a session-id 
    // ex. login credentials
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        This is the login page
        <a href="homepage.php">Redirects to the home page </a>
    </body>
    </html>
    <?php
    $_SESSION["username"] = "king_pomisco";
    $_SESSION["password"] = "Moses6002";
    ?>