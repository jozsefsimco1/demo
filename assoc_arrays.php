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
    /*Associative arrays do not need to be in order.*/
    $space = " ";
    /*Regilar array:*/ 
    $number = array('józsi','balázs','atti');
    /*Assoc array:*/ 
    $names = array("first_name" => 'Edwin', "last_name" => 'Diaz');
/*    
    print_r($number); 
    print_r($names); 
*/
    echo $names['first_name'] . $space . $names['last_name'];

?>
</body>
</html>