<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


 /*Step 1*/
 if (2!=2) {
	echo "I don't like PHP";
} elseif (3==5){
	echo "I love Python";
} else {
	echo "I love PHP";
}

echo "<br>";


 /*Step 2*/

 for ($i=1; $i<=10; $i++) {
	echo $i; 
 }

 echo "<br>";
  /*Step 3*/

  $myval = 5;
  switch($myval){
	case 1:
	echo "My variable is 1"; 
	break; 
	case 2:
	echo "My variable is 2"; 
	break; 
	case 3:
	echo "My variable is 3"; 
	break; 
	case 4:
	echo "My variable is 4"; 
	break; 
	case 5:
	echo "My variable is 5"; 
	break; 
	default: 
	echo "None of the numbers were correct."; 
	break; 
  }

?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>