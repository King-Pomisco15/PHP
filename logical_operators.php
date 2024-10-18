<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    
</body>
</html>

<?php
/*
Logical operators = combine conditional statements
If(condition1 && condition2)


&& = True if both conitions are true
!! = True if at least one condition is true 
 ! = True if false. Fals if true.
*/
  /*  $temp = 15;
    $cloudy = false;

    if($temp >= 0 && $temp <= 30){
        echo"The weather is good<br>";
    }
    else{
        echo"Absolute shitty weather<br>";
    }
    if($cloudy){
        echo"It's cloudy<br>";
    }
    else{
        echo"Its bright as fuck!<br>";
    }
        */
      /*  $age = 12;
        $citizen = true;
        if($age >= 18 && $citizen = true){
            echo"You are old enough to vote!";
        }
        else{
            echo "You are not old enough";
        }
       */
        $child = true;
        $senior =  false;
        $ticket =  null;

if($child || $senior){
    $ticket = 10;
}
else{
    $ticket = 40;
}
echo"Your price is \$$ticket";
?>
