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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/main.css">
  <script type='text/javascript' src="<?php echo base_url(); ?>assest/main.js"></script>
    
	<title>Suplier Adding</title>
</head>
<body>

	<div class="container backgroundImage">
		<!--start container-->
		<div class="title" >
			<!--start header-->
			
			<h2 >SUPLIER DETAIL FORM</h2>
			<!--end header-->
		</div>
		
		<form method="post" action="<?php echo site_url('/suplier_con/suplier_vali'); ?>">
		<div class="add_field">
			<!--start add field-->
			<div class="">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php echo validation_errors(); ?>
				
			
			  <div class="form-group">
			    <label for="Id">Suplier ID</label>
			    <input type="text" class="form-control"  name="Id">
			  </div>
			  <div class="form-group">
			    <label for="Suplier_Name">Suplier Name</label>
			    <input type="text" class="form-control"  name="Suplier_Name">
			  </div>
			  <div class="form-group">
			    <label for="Date">Date</label>
			    <input type="Date" class="form-control" name="Date">
			  </div>
			  <div class="form-group">
			    <label for="Contact_No">Contact No</label>
			    <input type="text" class="form-control"  name="Contact_No">
              </div>
              <div class="form-group">
			    <label for="Address">Address</label>
			    <input type="text" class="form-control" name="Address">
              </div>
              <div class="form-group">
			    <label for="Item_Code">Item Code</label>
			    <input type="text" class="form-control" name="Item_Code">
              </div>
  
  			<div style="margin-bottom: 50px">
  				<button type="submit" class="btn btn-danger">Add Data</button>
			  <a href="<?php echo site_url('suplier_con/suplier_retriew');?>" <button type="view" class="btn btn-danger">View</button></a>
				<!-- <a href="<?php echo base_url('suplier_con/suplier_retriew');?>" <button type="delete" class="btn btn-danger">Delete</button></a>
				<a href="<?php echo base_url('suplier_con/suplier_retriew');?>" <button type="update" class="btn btn-danger" >Update</button></a> -->
  			</div>
			  
			  
		
			</div>
			</div>
			<div class="col-md-4"></div>
			<!--end add field-->
		</div>
		</form>
		<!--end container-->
	</header>
	</div>

</body>
</html>