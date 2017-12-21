<?php 
	$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'techdata'))
	{
		echo'Database Not Selected';
	}
	$email = $_POST['email'];
	
	$sql = "INSERT INTO subscribers (email) VALUES ('$email')";
	
	if(!mysqli_query($con,$sql))
	{
		echo'Not Inserted';
	}
	else
	{
		echo'Thanks for subscribing with us....';
	}
	header("refresh:1; url=index.php");
	
?>	
