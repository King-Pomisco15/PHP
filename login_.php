<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <a href="index.css"></a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index_.php" method="post">
        Username<br>
        <input type="text" name="username"><br>
        Password<br>
        <input type="text" name="password"><br>
        E-mail<br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
<a href="index_.php">Click the link <br></a>
</body>
</html>
<?php
if(isset($_POST["login"])){
   if(!empty($_POST["username"]) &&
      !empty($_POST["password"]) && 
      !empty($_POST["email"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["email"] = $_POST["email"];
        
        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"] . "<br>";
        echo $_SESSION["email"]    . "<br>";
     }
     else{
        echo"Wrong info";
     }
    }
?>