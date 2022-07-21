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
		<h2>Edit item Student</h2>
		<?php
        $conn = mysqli_connect ('localhost','root','','laundry_membership_system');
        if(isset($_GET['edit'])){
			$edit_id = $_GET['edit'];
			
		$select = "SELECT * FROM fee WHERE id= '$edit_id'";
		$run = mysqli_query($conn,$select);
		$row_fee = mysqli_fetch_array($run);
			$customer_name = $row_fee['customer_name'];
			$resit_no = $row_fee['resit_no'];
			$amount = $row_fee['amount'];
			$pay_date = $row_fee['pay_date'];
			$notes = $row_fee['notes'];
		}


?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Customer Name</label>
			<input type="text" class="form-control" value="<?php echo $customer_name?>" placeholder="Enter name of detail" name="customer_name">
			</div>
			<div class="form-group">
			<label>Resit No</label>
			<input type="text" class="form-control" value="<?php echo $resit_no?>" placeholder="Enter resit no detail" name="resit_no">
			</div>
			<div class="form-group">
			<label>Amount</label>
			<input type="text" class="form-control" value="<?php echo $amount?>" placeholder="Enter amount detail" name="amount">
			</div>
			<div class="form-group">
			<label>Pay Date</label>
			<input type="text" class="form-control" value="<?php echo $pay_date?>" placeholder="Enter pay date detail" name="pay_date">
			</div>
			<div class="form-group">
			<label>Notes</label>
			<input type="text" class="form-control" value="<?php echo $notes?>" placeholder="Enter notes detail" name="notes">
			</div>
			<input type="submit" name="insert-btn" class="btn btn-primary">
			</form>
			
<?php
$conn = mysqli_connect ('localhost','root','','laundry_membership_system');

if (isset ($_POST['insert-btn'])){
	
		$ecustomer_name = $_POST['customer_name'];
		$eresit_no = $_POST['resit_no'];
		$eamount = $_POST['amount'];
		$epay_date = $_POST['pay_date'];
		$enotes = $_POST['notes'];
	
	    $update = "UPDATE fee SET customer_name='$ecustomer_name',resit_no='$eresit_no',amount='$eamount',pay_date='$epay_date',notes='$enotes' WHERE id='$edit_id'";
		
		$run_update = mysqli_query($conn,$update);
		if ($run_update === true) {
			echo "<script>window.open ('display_data_fee.php','_self');</script>";
		}else{
			echo "Failed. Try Again";
		}
}
?>


        </div>
		</body>
		</html>