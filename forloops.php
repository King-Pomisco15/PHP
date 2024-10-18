<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloops.php" method="post">
    <label>Enter a number to count to:<br></label>
    <input type="text" name="counter">
    <input type="submit" value="start">
    </form>
</body>
</html>
<?php
/*for($i = 0;$i < 5;$i++){
    echo $i. "<br>";
}
    */
// For loop = repeat some code a certain number of times
// It can make use of any one of these statements counter, condition, incrementation or decrementation
$counter = $_POST["counter"];
for($i = 0; $i <= $counter; $i++){
        echo $i ."<br>";
}
?>