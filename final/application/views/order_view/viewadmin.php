<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Bhagya Polythene Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">


	<br><h2>Orders</h2>

		<table class="table "> 
		<thead> 
			<tr> 
                <th>#</th>
                <th>Item</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Telephone No.</th>
                <th>Quantity</th>
			</tr> 
		</thead> 
<tbody> 
	<?php 
	$i=0;
foreach($res_id as $row){
	$i++;
?>
	<tr> 
		<th scope="row"><?php echo $i; ?></th> 
		<td><?php echo $row->item;?></td> 
        <td><?php echo $row->name;?></td> 
        <td><?php echo $row->address;?></td> 
        <td><?php echo $row->phone_no;?></td> 
        <td><?php echo $row->quantity ?></td> 
		<td>

			    </div>
			  </div>
		</td>
	</tr> 
<?php } ?>
</tbody> 
		</table>
</div>
</body>
</html>