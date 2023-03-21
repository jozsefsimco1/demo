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
    function addNumbers($number1, $number2){
        $sum = $number1 + $number2;

        return $sum;

    }
    $result = addNumbers(34,64); 
    /* this would be 98*/

    $result = addNumbers(100, $result);

        echo $result; /*this number should result in 198, we have reused a variable, changed it's output*/
    ?>


</body>
</html>