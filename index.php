<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
</head>
<body>
<!-- this is update form -->
	<?php 
		// this code form update form details
		// connection file 
		include('config.php');

		// here we check id set or not and id send through url so we use get method 
		if(isset($_GET['id'])){ //check id set

			// query for fetch result of specific user with his id
			$result = mysqli_query($con, "SELECT * FROM registration WHERE user_id ='".$_GET['id']."'");

			// fetch records
			while ($row = mysqli_fetch_array($result)) { ?>
<!-- assign records to text box check it -->
				<div class="reg-form">
					<h2> User Registration </h2>
					<form action="db_update.php" method="post">
						<!-- this is user id it hide  -->
						<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
						<label> Name </label><br>
						<input type="text" name="name" placeholder="Enter name" value="<?php echo $row['full_name'] ?>"><br><br>
						<label> Contact </label><br>
						<input type="text" name="contact" placeholder="Enter contact no" value="<?php echo $row['contact'] ?>"><br><br>
						<label> Email </label><br>
						<input type="text" name="email" placeholder="Enter email" value="<?php echo $row['email'] ?>"><br><br>
						<input type="submit" value="Save">
					</form>
				</div>
				
		<?php	}

		}else{
	 ?>

	 <!-- this file contain both insert and update user details form fisrt we see insert form -->
	 	<!-- this is insert form which contain full name, contact, email details when click on save data send to db_insert file lets see db_insert.php file -->
			<div class="reg-form">
				<h2> User Registration </h2>
				<form action="db_insert.php" method="post">
					<label> Name </label><br>
					<input type="text" name="name" placeholder="Enter name"><br><br>
					<label> Contact </label><br>
					<input type="text" name="contact" placeholder="Enter contact no"><br><br>
					<label> Email </label><br>
					<input type="text" name="email" placeholder="Enter email"><br><br>
					<input type="submit" value="Save">
				</form>
			</div> 
	<?php } ?>
</body>
</html>

