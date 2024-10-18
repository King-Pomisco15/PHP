<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset&empty_functions.php" method="post"><br>
      <label>Username</label><br>
      <input type="text" name="username"><br>
      <label>Password</label><br>
      <input type="password" name="password"><br>
      <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>
<?php

if(isset($_POST["login"])){
   $username = $_POST["username"];
   $password = $_POST["password"];

   if(empty($username)){
      echo"Username is missing <br>";
   }
   elseif(empty($password)){
      echo"Password is missing";
   }
   else{
      echo "Welcome $username"; 
   }
}


    foreach($_POST as $key => $value){
       echo"{$key} = {$value} <br>";
    }

    //isset()  = Returns TRUE if a variable is declared and null
    //empty()  = Returns TRUE if a variable is not declared, false, null,


      // $username = null;
      // if(isset($username)){
      //    echo "This variable is set<br>";
      // }
      // else{
      //    echo "Who art thou ?<br>";
      // }

      // $username_1 = false;
      // if(empty($username_1)){
      //    echo "This variable is empty<br>";
      // }
      // else{
      //    echo"This variable is NOT empty<br>";
      // }
 
?>