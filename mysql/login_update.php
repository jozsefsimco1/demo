<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php 

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";  // Note: for the instructor not putting a space after the SET word made an error as it was reading SETusername instead of SET username
    $query .= "username = '$username' ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";


    $result = mysqli_query($connection, $query); 

    if(!$result) {
        die("QUERY FAILED"); // for me this was successul at first time and the teacher made an error -> he concatinated mysqli_error($copnnection); to get more information 
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="col-sm-6">
    <div class="container">
    <div class="col-xs-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password"  name="password" class="form-control"><br>
            </div>
            <div class="form-group">
            <select name="id" id="">

            <?php 

            showAllData();

            ?>

               <!-- <option value="">1</option> -->
            </select>
            <div>
            <br><input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>
    </div>
</div>
    </div>
</div>
    
</body>
</html>