<!DOCTYPE html>
<html>
<head>
	<title>READ Operation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">


	<br><h2>Orders</h2>

		<table class="table "> 
		<thead> 
			<tr> 
                <th>#</th>
                <th>Item</th>
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
        <td><?php echo $row->quantity ?></td> 
		<td>
			<a href="<?php echo site_url('Order/update/'.$row->order_id);?>"><button type="button" class="btn btn-primary">update</button></a>
			<a href="<?php echo site_url('Order/delete/'.$row->order_id);?>"><button type="button" class="btn btn-danger">delete</button></a>

			    </div>
			  </div>
		</td>
	</tr> 
<?php } ?>
</tbody> 
		</table>

	<!-- <a href="<?php echo site_url('Order/create/'.$this->session->userdata('user_id'));?>"><button type="button" class="btn btn-warning">Add New Order</button></a><br> -->
</div>
</body>
</html>