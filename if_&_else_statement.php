<?php
/*$age = 17;
if ($age >= 100){
    echo"You shall not pass";
}
elseif($age >= 18){
    echo"You may pass";
}
elseif($age <= 0){
    echo"You were just fuckng born";
}
else{
    echo"Grow some hair on your chest";
*/ 

$hours = 70;
$rate = 30;
$weekly_pay = null;
if($hours <= 0){
    $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours-40) * ($rate * 1.5));
}
echo"You made \${$weekly_pay} this week";
?>