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
		<h2>Edit New Card</h2>
		
		<?php
		$conn = mysqli_connect ('localhost','root','','laundry_membership_system');
		if(isset ($_GET['edit'])){
			$edit_id = $_GET['edit'];
		
		$select = "SELECT * FROM renew_card WHERE id='$edit_id'";
		$run = mysqli_query($conn,$select);
		$row_renew_card = mysqli_fetch_array($run);
			$name = $row_renew_card['name'];
			$amount = $row_renew_card['amount'];
			$expired_date = $row_renew_card['expired_date'];
			$duration = $row_renew_card['duration'];
			$balance = $row_renew_card['balance'];
	}
	
	
?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>NAME</label>
			<input type="text" class="form-control" value="<?php echo $name?>" placeholder="Enter name detail" name="name">
			</div>
			<div class="form-group">
			<label>AMOUNT</label>
			<input type="text" class="form-control" value="<?php echo $amount?>" placeholder="Enter amount detail" name="amount">
			</div>
			<div class="form-group">
			<label>EXPIRED DATE</label>
			<input type="text" class="form-control" value="<?php echo $expired_date?>" placeholder="Enter expired date detail" name="expired_date">
			</div>
			<div class="form-group">
			<label>DURATION</label>
			<input type="text" class="form-control" value="<?php echo $duration?>" placeholder="Enter duration detail" name="duration">
			</div>
			<div class="form-group">
			<label>BALANCE</label>
			<input type="text" class="form-control" value="<?php echo $balance?>" placeholder="Enter balance detail" name="balance">
			</div>
			
			<input type="submit" name="insert-btn" class="btn btn-primary">
			</form>
<?php
$conn = mysqli_connect ('localhost','root','','laundry_membership_system');

if (isset ($_POST['insert-btn'])){
	
		$ename = $_POST['name'];
		$eamount = $_POST['amount'];
		$eexpired_date = $_POST['expired_date'];
		$eduration = $_POST['duration'];
		$ebalance = $_POST['balance'];
		
		$update = "UPDATE renew_card SET name='$ename',amount='$eamount',expired_date	='$eexpired_date',duration='$eduration',balance='$ebalance' WHERE id='$edit_id'";
		
		$run_update = mysqli_query ($conn,$update);
		if ($run_update === true) {
			echo "<script>window.open ('display_data_renewcard.php','_self');</script>";
		}else{
			echo "Failed. Try Again";
		}
}
?>

		</div>
		</body>
		</html>