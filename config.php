<?php 
	
	// this file is database connection file, here we create database connection

	$con = mysqli_connect("localhost", "root", "", "core_php_curd");

	if(!$con){

		// if any connection error then display error and terminate the program
		echo "Connection error...!";
		die();
	}
 ?>