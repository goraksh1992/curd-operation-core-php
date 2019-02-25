<?php 

	include("config.php");

	// get data from url using GET method
	$id = $_GET['id'];

	// delete query
	$sql = mysqli_query($con, "DELETE FROM registration WHERE user_id = '$id' ");

	if($sql){

		// if success redirect to same page
		header("location:regist_details.php");

	}else{

		// else show error
		echo "error";
		echo "<a href='regist_details.php'> Back </a>";
	}

 ?>