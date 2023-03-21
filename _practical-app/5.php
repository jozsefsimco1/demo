<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it
	

	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>

<?php 
/*Step 1*/
$val = 10.2;
echo floor($val);

echo "<br>";
 /*Step 2*/
echo str_replace("world","Józsi","Hello world!");

echo "<br>";
/*Step 3*/
$cars=array("Audi","BMW","Mercedes");
print_r(array_chunk($cars,2));



?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>