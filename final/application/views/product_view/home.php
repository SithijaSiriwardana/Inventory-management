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
  <?php if($error = $this->session->flashdata('response')): ?>
        <div class="alert alert-dismissible alert-success">
          <?php echo $error;?>
   </div> 
 <?php endif; ?>




	<hr>
   <div class="row">
   	 <div class="col-lg-12">
      <a href="<?php echo site_url('Home/create');?>"><button type="button" class="btn btn-warning">Add New Products</button></a>
   	 </div>
   </div>
   <hr>
<table class="table table-striped table-hover">
  <thead>
  	 <tr>      
      <th>Product Code</th>
      <th>Product Name</th>
      <th>Product Size</th>
      <th>Product Price</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(count((array)$records)): ?>
  	<?php foreach ($records as $record): ?>
    <tr>
      <td><?php echo $record->productCode; ?></td>
      <td><?php echo $record->productName; ?></td>
      <td><?php echo $record->productSize; ?></td>
      <td><?php echo $record->productPrice; ?></td>
<td><?php echo anchor("Home/edit/$record->productCode", 'Update',['class'=>'btn btn-info btn-lg']); ?></td>
<td><?php echo anchor("Home/delete/{$record->productCode}", 'Delete',['class'=>'btn btn-danger btn-lg']); ?></td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
<tr>No Records Found!!</tr>
<?php endif; ?>
   
   
  </tbody>
</table>
</div>
<?php include('footer.php'); ?>