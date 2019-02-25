<?php 
	
	// include connection file for db connection
	include('config.php'); 

	// Here we accept data from front end 
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	// Query for insert data in registration table. table already created 

	$sql = "INSERT INTO registration (full_name,contact,email) VALUES ('$name', '$contact', '$email')";

	// run query and store result in $result variable
	$result = mysqli_query($con, $sql); 

	// here we check insert count
	if($result > 0){

		// if insert then redirect to register user details page
		echo "Record inserted";
		header("location:regist_details.php"); 

	}else{

		// if not then redirect to registration page error
		header("location:index.php");

	}

 ?>