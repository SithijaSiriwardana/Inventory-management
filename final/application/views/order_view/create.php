<html>
<head>
	<title>Welcome page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
	<h2>Items</h2>
		<table class="table "> 
		<thead> 
			<tr> 
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
			</tr> 
		</thead> 
<tbody> 
<?php foreach($res as $row){?>
	<tr> 
		<td><?php echo $row->productName;?></td> 
		<td><?php echo $row->productSize; ?></td> 
		<td><?php echo $row->productPrice?></td> 
		</div>
		</div>
	</tr> 
<?php } ?>
</tbody> 
		</table>
	</div>
</div>
<!-- <?php echo $id;?> -->
<div class="container">
<!-- <a href="<?php echo site_url('Order/readcus/');?>"><button type="button" class="btn btn-warning">View Orders</button></a> -->
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('Order/create_post'); ?>">
		<br><h2>Create your order</h2>
		<div class="form-group">
			<label for="input">Item</label>
				<select name="type" class="form-control" required>
					<option>--Item--</option>
					<option value="Selapine">Selapine</option>
					<option value="polythene(500)">polythene(500)</option>
					<option value="polythene(250)">polythene(250)</option>
					<option value="Lunch Sheet">Lunch Sheet</option>
					<option value="Tissues">Tissues</option>
					<option value="Grossery Bags">Grossery Bags</option>
					<option value="Shopping Bags">Shopping Bags</option>
				</select>
			</div>
			<div class="form-group">
			    <label for="input">Name</label>
			     	<input type="text" name="name" class="form-control" id="input" placeholder="Name" required/>
			</div>
			<div class="form-group">
			    <label for="input">Address</label> 
			       <input type="text" name="address" class="form-control" id="input" placeholder="Address" />
			</div>
			<div class="form-group">
			    <label for="input" >Telephone No.</label>
			     	<input type="text" name="telephone"  class="form-control" id="input" placeholder="Telephone No." required/>
			</div>
			<div class="form-group">
			    <label for="input">Quantity</label>
					<input type="text" name="quantity" class="form-control" id="input" placeholder="Quantity" required/>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Create</button>
			</div>
		</form>
</div>
</body>
</html>