<?php
/*once sb. hits submit this will run first*/
/*isset checks if submit exists and was clicked*/
if(isset($_POST['submit'])) {


    $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
    $minimum = 5;
    $maximum = 10; 
    $username = $_POST['username'];
    $password = $_POST['password'];

    /*Build a rule that limits the entered value*/
    if(strlen($username) < ($minimum)) {
        echo "Username has to be longer than $minimum";
    } elseif (strlen($username) > ($maximum)) {
        echo "Username has to be less than $maximum";
    } else {
        if(!in_array($username, $name)) {
            echo "Sorry, you are not allowed to log in."; 
        } else {
            echo "Welcome!"; 
        }
    
    }






//    echo "Hello ";
//    echo "$username"; 
//    echo ", your password is: ";
//    echo "$password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--add the form and specify where it should come back when submit is hit-->
    <form action"form.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>