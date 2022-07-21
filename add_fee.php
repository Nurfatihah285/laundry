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
		<h2>Add New Student</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Customer Name</label>
			<input type="text" class="form-control" placeholder="Enter name of detail" name="customer_name">
			</div>
			<div class="form-group">
			<label>Resit No</label>
			<input type="text" class="form-control" placeholder="Enter resit no detail" name="resit_no">
			</div>
			<div class="form-group">
			<label>Amount</label>
			<input type="text" class="form-control" placeholder="Enter amount detail" name="amount">
			</div>
			<div class="form-group">
			<label>Pay Date</label>
			<input type="text" class="form-control" placeholder="Enter pay date detail" name="pay_date">
			</div>
			<div class="form-group">
			<label>Notes</label>
			<input type="text" class="form-control" placeholder="Enter notes detail" name="notes">
			</div>
			<input type="submit" name="insert-btn" class="btn btn-primary">
			</form>
			
<?php
$conn = mysqli_connect ('localhost','root','','laundry_membership_system');

if (isset ($_POST['insert-btn'])){
	
		$customer_name = $_POST['customer_name'];
		$resit_no = $_POST['resit_no'];
		$amount = $_POST['amount'];
		$pay_date = $_POST['pay_date'];
		$notes = $_POST['notes'];
	
	    $insert = "INSERT INTO FEE(customer_name, resit_no, amount, pay_date, notes)
		VALUES ('$customer_name','$resit_no','$amount','$pay_date','$notes')";
		
		$run_insert = mysqli_query ($conn,$insert);
		if ($run_insert === true) {
			echo "<script>window.open ('display_data_fee.php','_self');</script>";
		}else{
			echo "Failed. Try Again";
		}
}
?>


        </div>
		</body>
		</html>