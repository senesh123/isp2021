<!--?php
include_once 'config.php';
?-->

<!--?php
try{
	$db = new mysqli("localhost", "root","","software_solution1");
}
catch (Exception $exc){
	echo $exc -> getTraceAsString();
}

if(iseet($POST['name']) && iseet($POST['email']) && iseet($POST['number']) && iseet($POST['subject']) && iseet($POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	



	$is_insert = $db->query ("INSERT INTO 'data'('name', 'email', 'number','subject', 'message') VALUES ('name', 'email', 'number','subject','message' )");

	if($is_insert == TRUE){
		echo "<h2>Thank, Your request submited.</h2>";
		exit();
	}
}

?-->

<?php 
 $conn=mysqli_connect("localhost","root","","software_solution");
  
    $name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

//attempt insert query execution
$sql = "INSERT INTO customer(name,email,number,subject,message)VALUES('$name','$email','$number','$subject','$message')";

	if(mysqli_query($conn, $sql)){
	header("Location:index.html");
  
}
else{
    echo "<script> alert('Try Again') </script>";
}
//close connection
mysqli_close($conn);

?>