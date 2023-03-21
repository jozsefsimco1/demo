
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

if (isset($_POST['submit'])) {

	$value_entered_by_user = $_POST['value_entered']; 
	echo "The value saved in the superglobal is: $value_entered_by_user";

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
	<form action="6.php" method="post">
		<input type ="text" name="value_entered" placeholder="Enter the value">
		<br>
		<br>
		<input type ="submit" name="submit" placeholder="Submit">
	</form>
</body>
</html>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>