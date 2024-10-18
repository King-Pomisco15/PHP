<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sanitization&validation.php" method="post">username:<br>
    <input type="text" name="username"><br>Age:<br>
    <input type="text" name="age"><br>E-mail:<br>
    <input type="email" name="email">
    <input type="submit" name="login" value="login"><br>
</form>
</body>
</html>
<?php
if(isset($_POST["login"])){
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      echo"Hello {$username}<br>";
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      echo"Your email address is {$email}<br>";
}
if(isset($_POST["login"])){
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
}   if(empty($age)){
    echo"That isn't a valid number<br>";
}
else{
    echo"You are {$age} years old.";
}
if(isset($_POST["email"])){
    $age = filter_input(INPUT_POST, "email", FILTER_VALIDATE_INT);
}   if(empty($age)){
    echo"That isn't a valid email<br>";
}
else{
    echo"You are {$email} has been registered.";
}
?>