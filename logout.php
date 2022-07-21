<?php
session_start();
$connect = mysqli_connect('localhost','root', '', 'laundry_membership_system');
$query = "SELECT * FROM fee ORDER BY ID DESC";
$result = mysqli_query($connect, $query);

	echo "<script>window.open('login.php','_self');</script>";
	
	
	session_destroy();
?>