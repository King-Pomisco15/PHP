<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_operators.php" method="post">
        <label>x:</label><br>
        <input type="text" name="total"><br>
        <input type="submit" value="total"><br>
        <label>y:</label><br>
        <input type="text" name="total"><br>
        <input type="submit" value="total"><br>
        <label>z:</label><br>
        <input type="text" value="total"><br>
        <input type="submit" value="total">
    </form>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
echo $x;
echo $y;
echo $z;
//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = pow($x);
//$total = sqrt($x);
//$total = max($x, $y, $z);
?>
</body>
</html>