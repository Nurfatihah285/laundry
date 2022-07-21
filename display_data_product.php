<?php
$connect = mysqli_connect ("localhost","root","","laundry_membership_system");
$query ="SELECT * FROM product ORDER BY ID DESC";
$result = mysqli_query($connect, $query);

?>

<! DOCTYPE html> 
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
		<br/><br/>
		<div class= "container">
		<h3 align= "center">Product</h3>
		<br>
		<div class= "table-responsive">
			<table id= "view_data" class= "table table-striped table-bordered">
			<thead>
				<tr>
					<td>Name</td>
					<td>Types of Laundry</td>
					<td>Frequency (Month)</td>
					<td>Level</td>
					<td>Kilogram</td>
					<td>Update</td>
					<td>Delete</td>
				</tr>
			</thead>
			
			<?php
				while($row = mysqli_fetch_array($result))
				{
					
					echo '
					<tr>
						<td>' .$row["name"]. '</td>
						<td>' .$row["types_of_laundry"]. '</td>
						<td>' .$row["frequency_month"]. '</td>
						<td>' .$row["level"]. '</td>
						<td>' .$row["kilogram"]. '</td>
						<td><a class= "btn btn-primary" href="edit_product.php?edit='.$row["id"].'">Update</a></td>
						<td><a class= "btn btn-danger" href="display_data_product.php?del='.$row["id"].'">Delete</a></td>
					</tr>
					';
				}
			?>
			</table>
			<a class="btn btn-danger" href="logout.php">Logout</a>
		</div>
		<td><a class= "btn btn-success" href="add_product.php">Add New Products</a></td>
		</div>
		</body>
	
	
</html>

<?php
$connect = mysqli_connect ("localhost","root","","laundry_membership_system");
if(isset ($_GET['del'])){
	$del_id = $_GET['del'];
	$delete = "DELETE FROM product WHERE id='$del_id'";
	$run_delete = mysqli_query($connect,$delete);
		if($run_delete === true){
			echo "<script>window.open('display_data_product.php','_self');</script>";
		}else{
			echo "Failed, try again.";
		}
}
?>

<script>
$(document).ready(function(){
	$('#view_data').DataTable();
});
</script>
