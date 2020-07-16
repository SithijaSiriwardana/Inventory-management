<html>
<head>
	<title>Simple CRUD Application in CodeIgniter - CREATE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('Order/update_post/'.$crud_data->order_id);?>">
    <h2>Update your order</h2>
	<div class="form-group">
			<label for="input">Item</label>
				<select name="type" class="form-control" required>
					<option>--Item--</option>
					<option value="Selapine" <?php if($crud_data->item == "Selapine"){ echo "selected";}?>>Selapine</option>
					<option value="polythene(500)" <?php if($crud_data->item == "polythene(500)"){ echo "selected";}?>>polythene(500)</option>
					<option value="polythene(250)" <?php if($crud_data->item == "polythene(250)"){ echo "selected";}?>>polythene(250)</option>
					<option value="Lunch Sheet" <?php if($crud_data->item == "Lunch Sheet"){ echo "selected";}?>>Lunch Sheet</option>
					<option value="Tissues" <?php if($crud_data->item == "Tissues"){ echo "selected";}?>>Tissues</option>
					<option value="Grossery Bags" <?php if($crud_data->item == "Grossery Bagse"){ echo "selected";}?>>Grossery Bags</option>
					<option value="Shopping Bags" <?php if($crud_data->item == "Shopping Bags"){ echo "selected";}?>>Shopping Bags</option>
				</select>
	</div>
	<div class="form-group">
			<label for="input" required>Name</label>
			<input type="text" name="name" class="form-control" id="input" placeholder="Name" value="<?php echo $crud_data->name;?>" />
	</div>
	<div class="form-group">
			<label for="input">Address</label>
			<input type="text" name="address" class="form-control" id="input" placeholder="Address" value="<?php echo $crud_data->address;?>" />
	</div>
	<div class="form-group">
			<label for="input">Telephone No.</label>
			 <input type="text" name="telephone" class="form-control"  id="input" placeholder="Telephone No." value="<?php echo $crud_data->phone_no;?>" required/>
	</div>
	<div class="form-group">			  
			<label for="input">Quantity</label>
			<input type="text" name="quantity" class="form-control" id="input" placeholder="Quantity" value="<?php echo $crud_data->quantity;?>" required/>
	</div>
	<div class="form-group">
			<button type="submit"  class="btn btn-info">Update</button>
        </div>
		</form>
</div>
</body>
</html>