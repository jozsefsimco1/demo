<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*use a switch statement when you would write tons of if-s to test one condition, so don't do the below then*/

/*
$number = 4; 
if($number < 10) {
    echo "this";
}

if($number < 20) {
    echo "this";
}

if($number < 40) {
    echo "this";
}
*/
/*instead you can specify cases and use a switch statement like below */ 
/*Note: Tests one single condition on $number*/
/*Note: use break, as it breaks out of code when the right solution has been found*/

$number = 100; 
switch($number) {
    case 34: 
    echo "is it 34"; 
    break;
    case 37: 
    echo "it is 37"; 
    break;
    case 40: 
    echo "it is 40";
    break;
    case 50: 
    echo "it is 50";
    break;
    case 60: 
    echo "it is 60";
    break;
    default: 
    echo "we could not find the solution you were looking for";
    break; 
}


?>
</body>
</html>