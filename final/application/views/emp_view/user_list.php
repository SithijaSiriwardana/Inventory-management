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
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Members</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo site_url('Users/addnew'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Full_name</th>
						<th>National_id</th>
						<th>Date_of_Birth</th>
						<th>Gender</th>
						<th>Marital_status</th>
						<th>Job_title</th>
						<th>Address</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($employee_details as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->Full_Name; ?></td>
							<td><?php echo $user->National_Id; ?></td>
							<td><?php echo $user->Date_of_birth; ?></td>
							<td><?php echo $user->Gender; ?></td>
							<td><?php echo $user->Marital_status; ?></td>
							<td><?php echo $user->Job_title; ?></td>
							<td><?php echo $user->Address; ?></td>
							<td><?php echo $user->Mobile; ?></td>
							<td><?php echo $user->Email; ?></td>
							<td><a href="<?php echo site_url(); ?>/users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo site_url(); ?>/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>