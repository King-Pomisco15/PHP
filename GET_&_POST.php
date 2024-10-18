<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="GET_&_POST.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
echo "{$_POST["username"]} <br>" ;
echo "{$_POST["password"]} <br>";
/*
$_GET, $_POST = special variables used to collect data from an HTML from data is sent to the file in the action attribute of<form></form>

<form action="some_fil.php" method="get> 
*/

// $_GET =   Data is appended to the url
//           NOT SECURE 
//           char limit
//           Bookmark is possible w/ values
//           GET requests can be cached 
//           Better for search page


// $_POST =   Data is packaged insidee the body of the HTTP request 
//            MORE SECURE
//            No data limit 
//            Cannot bookmark
//            GET requests are not cached 
//            Beter for submitting credentials 
?>           