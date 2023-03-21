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
$x = "outside"; // global

function convert() {
    global $x; // because we write global and our variable we make it work outside of this function
    $x = "inside";  // local
}

echo $x; // global
echo "<br>";
convert();
echo $x; // local


?>


</body>
</html>