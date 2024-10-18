<?php
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
    Please create an account with us
    <form action="login.php" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="email" name="email">
        <input type="text" name="password">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
include()
if(isset($_POST["submit"])){
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
    $email = ($_POST["email"]);

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      echo"Hello {$username}<br>";
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      echo"Your email address is {$email}<br>";
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    
}
?>