<?php 
	
	// connection file
	include('config.php'); 

	// select query this will get user details from table 
	// we get all user records
	$sql = "SELECT * FROM registration";

	// run query pass connection
	$result = mysqli_query($con, $sql);

?>
<style type="text/css">
	button{

		margin: 5px;
	}
</style>
<!-- This is table for show user details -->
<table border="1">
	<thead>
		<tr>
			<th> Full name </th>
			<th> Contact </th>
			<th> Email </th>
			<th> Action </th>
		</tr>
	</thead>
	<tbody>

<?php 
	// here take loop for fetch data because data fetch in array format store in $value array 
	while($value = mysqli_fetch_array($result)) {
?>
	<!-- here we show our fetch data -->
	<tr> 
		<td><?php echo $value['full_name'] ?></td>
		<td><?php echo $value['contact'] ?></td>
		<td><?php echo $value['email'] ?></td>
		<td> 
			<!-- this link for update record and we pass user_id through url  -->
			<a href="index.php?id=<?php echo $value['user_id'] ?>"> <button> Update </button> </a>
			<!-- this link for delete user we pass that specific user id -->
			<a href="delete.php?id=<?php echo $value['user_id'] ?>"> <button>  Delete </button> </a>
		</td>
	</tr>
		
<?php

	}
 ?>		
