<?php
$name = "Moses Daniel";
$email = "kingpomisco@gmail.com";
$age = 17;
$users = 23400;
echo "$name<br>"; 
// To include write texts with variables
echo "Hello {$name}<br>";
echo "Hello world, My name is {$name} and i am 17 years old";
echo "My e-mail is {$email}<br>";
echo "There are {$users} users online<br>";
// escape sequence
$price = 59.99;
echo "The price is only \${$price}<br>";
//booleans 
$employed = true;
$online = true; 
$forsale = true;
$food = "pizza";
$quantity = 7;
$total = null;
echo "Online status: {$online}<br>";

echo " You have ordered {$quantity}x {$food}s<br>";
$total = $quantity * $price;
echo "Your Total is \${$total}";
?>