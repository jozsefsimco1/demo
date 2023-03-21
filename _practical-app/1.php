<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
		


 
<?php

		/* 
		   Step 1:  Use the Echo Function to say hello with html h1                  tags embedded inside php.
			

		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.


		   */
?>


<?php 
/*In this function I store a data in $sayhello variable, then embed it into an HTML H1 tag.*/
$sayinghello = "Hello Mr. Diaz!";
?>
		   <h1><?php echo $sayinghello; ?></h1>

	

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>