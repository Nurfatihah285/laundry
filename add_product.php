<!DOCTYPE html> 
<html>
	<head>
	<title>Laundry Membership System</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>

	</head>
		<body>
		<br><br>
		<div class="container">
		<h2>Add New Products</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>NAME</label>
			<input type="text" class="form-control" placeholder="Enter Name detail" name="name">
			</div>
			<div class="form-group">
			<label>TYPES OF LAUNDRY</label>
			<input type="text" class="form-control" placeholder="Enter Types of laundry detail" name="types_of_laundry">
			</div>
			<div class="form-group">
			<label>FREQUENCY (MONTH)</label>
			<input type="text" class="form-control" placeholder="Enter frequency detail" name="frequency_month">
			</div>
			<div class="form-group">
			<label>LEVEL</label>
			<input type="text" class="form-control" placeholder="Enter level detail" name="level">
			</div>
			<div class="form-group">
			<label>KILOGRAM</label>
			<input type="text" class="form-control" placeholder="Enter kilogram detail" name="kilogram">
			</div>
			
			<input type="submit" name="insert-btn" class="btn btn-primary">
			</form>
<?php
$conn = mysqli_connect ('localhost','root','','laundry_membership_system');

if (isset ($_POST['insert-btn'])){
	
		$name = $_POST['name'];
		$types_of_laundry = $_POST['types_of_laundry'];
		$frequency_month = $_POST['frequency_month'];
		$level = $_POST['level'];
		$kilogram = $_POST['kilogram'];
		
		$insert = "INSERT INTO product(name, types_of_laundry, frequency_month, level, kilogram)
		VALUES ('$name','$types_of_laundry','$frequency_month','$level','$kilogram')";
		
		$run_insert = mysqli_query ($conn,$insert);
		if ($run_insert === true) {
			echo "<script>window.open ('display_data_product.php','_self');</script>";
		}else{
			echo "Failed. Try Again";
		}
}
?>

		</div>
		</body>
		</html>