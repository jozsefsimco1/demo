<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    // Check if database connerction was correct!
    if ($connection) {
        echo "We are connected!"; 
    } else {
        die("Database connection failed.");
    }



?>