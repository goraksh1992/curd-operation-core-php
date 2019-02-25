<?php 
	
	// connection file
	include('config.php'); 

	   // accept data from front end
		$id = $_POST['id'];
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];

		// update query and update with specific user id
		$sql = "UPDATE registration SET full_name = '".$name."', email = '".$email."', contact = '".$contact."' WHERE user_id = '$id'";

		// run query
		$result = mysqli_query($con, $sql);

		if($result){

			// if success back to same page
			header("location:regist_details.php");

		}else{

			// if error 
			echo "error";
			echo "<a href='index.php?id=$id'> Back </a>";
		}

 ?>