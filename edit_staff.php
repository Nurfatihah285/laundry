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
		<h2>Edit Staff</h2>
	<?php
	$conn = mysqli_connect ('localhost','root','','laundry_membership_system');
	if(isset($_GET['edit'])){
		$edit_id = $_GET['edit'];
	
	$select = "SELECT * FROM staff WHERE id='$edit_id'";
	$run = mysqli_query($conn,$select);
	$row_staff = mysqli_fetch_array($run);
		$name = $row_staff['name'];
		$contact_number = $row_staff['contact_number'];
		$staff_id = $row_staff['staff_id'];
		$address = $row_staff['address'];
	}
	
?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>NAME</label>
			<input type="text" class="form-control" value="<?php echo $name?>" placeholder="Enter name of detail" name="name">
			</div>
			<div class="form-group">
			<label>CONTACT NUMBER</label>
			<input type="text" class="form-control" value="<?php echo $contact_number?>" placeholder="Enter contact number detail" name="contact_number">
			</div>
			<div class="form-group">
			<label>STAFF ID</label>
			<input type="text" class="form-control" value="<?php echo $staff_id?>" placeholder="Enter staff id detail" name="staff_id">
			</div>
			<div class="form-group">
			<label>ADDRESS</label>
			<input type="text" class="form-control" value="<?php echo $address?>" placeholder="Enter address detail" name="address">
			</div>
		
			<input type="submit" name="insert-btn" class="btn btn-primary">
			</form>
			
<?php
$conn = mysqli_connect ('localhost','root','','laundry_membership_system');

if (isset ($_POST['insert-btn'])){
	
		$ename = $_POST['name'];
		$econtact_number = $_POST['contact_number'];
		$estaff_id = $_POST['staff_id'];
		$eaddress = $_POST['address'];

		$update = "UPDATE staff SET name='$ename',contact_number='$econtact_number',staff_id='$estaff_id',address='$eaddress' WHERE id='$edit_id'";
		
		$run_update = mysqli_query ($conn,$update);
		if ($run_update === true) {
			echo "<script>window.open ('display_data_staff.php','_self');</script>";
		}else{
			echo "Failed. Try Again";
		}
}
?>


		</div>
		</body>
		</html>