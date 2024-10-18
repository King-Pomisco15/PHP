<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobuttons.php" method="post">
        <input type="radio" name ="credit_card" value="Visa">Visa<br>
        <input type="radio" name ="credit_card" value="MasterCard">MasterCard<br>
        <input type="radio" name ="credit_card" value="Verve">Verve<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]));
$credit_card = $_POST["credit_card"];
switch($credit_card){
    case("Visa");
        echo"You selected Visa";
        break;
    case("Verve");
        echo"You selected Verve";
        break;
    case("MasterCard");
        echo"You selected MasterCard";
        break;
    default:
    echo"Please make a selection";
}
?>