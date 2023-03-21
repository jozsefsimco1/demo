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

/*
    function say_something() {
        echo "Hello Student, do you like the class? Okay great";
    }
*/

    function init() {
        calculate();
        echo "<br>";
        say_something();
        echo "<br>";
        say_something_else();
    }
    
    function calculate() {
        echo 456+345; 
    }

    function say_something() {
        echo "Hello Student, do you like the class? Okay great.";
    }

    function say_something_else() {
        echo "Something else said.";
    }

    init();

    ?>
</body>
</html>