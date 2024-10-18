<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbuttons.php" method="post">
        <input type="checkbox" name="meth" value="Meth">Meth<br>
        <input type="checkbox" name="crack" value="Crack">Crack<br>
        <input type="checkbox" name="dopamine" value="Dopamine">Dopamine<br>
        <input type="checkbox" name="amphetamine" value="Amphetamine">Amphetamine<br>
        <input type="submit" name="submit"><br>
    </form>
</body>

</html>
<?php
$checkbox = $_POST["checkbox"];
if (isset($_POST["submit"])) {

    if (isset($_POST["meth"])) {
        echo "You have chosen Meth<br>";
    }
    if (isset($_POST["crack"])) {
        echo "You have chosen crack<br>";
    }
    if (isset($_POST["dopamine"])) {
        echo "You have chosen dopamine<br>";
    }
    if (isset($_POST["amphetamine"])) {
        echo "You have chosen amphetamine<br>";
    }
    if (empty($_POST["meth"])) {
        echo "You dont like meth<br>";
    }
    if (empty($_POST["crack"])) {
        echo "You dont like crack<br>";
    }
    if (empty($_POST["dopamine"])) {
        echo "You dont like dopamine<br>";
    }
    if (empty($_POST["amphetamine"])) {
        echo "You dont like amphetamine<br>";
    } else {
    }
}

?>