<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Members</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				
			</h3>
			<hr>
			<form method="POST" action="<?php echo site_url('Users/insert'); ?>">
				<div class="form-group">
					<label>Full_name:</label>
					<input type="text" class="form-control" name="Full_name">
				</div>
				<div class="form-group">
					<label>National_id:</label>
					<input type="text" class="form-control" name="National_id">
				</div>
				<div class="form-group">
					<label>Date_of_Birth:</label>
					<input type="text" class="form-control" name="Date_of_Birth">
				</div>
				<div class="form-group">
					<label>Gender:</label>
					<input type="text" class="form-control" name="Gender">
				</div>
				<div class="form-group">
					<label>Marital_status:</label>
					<input type="text" class="form-control" name="Marital_status">
				</div>
				<div class="form-group">
					<label>Job_title:</label>
					<input type="text" class="form-control" name="Job_title">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="Address">
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" name="Mobile">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" name="Email">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>