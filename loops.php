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
    

    /* While loop*/ 
    /*
    $i = 0; 
    while($i <= 10){
        echo $i;
        $i++; 
    }
    */

    /* For loop*/ 
    for ($z = 0; $z < 10; $z++) {
        echo $z . "<br>";
    }



    /*First element is an array*/
    /*For each first element it will assign a value from the second element*/

    $numbers = array(345, 387, 398, 4621, 1234, 6453);

    foreach($numbers as $number) {

        echo $number . "<br>"; 
    }

    ?>
</body>
</html>