
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

<br>
<div class="container">
<?php echo form_open('Home/save',['class'=>'form-horizontal']); ?>
  <fieldset>
<hr>
    <div class="container"></div>
    <legend>Add New Product</legend>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
      <label for="inputEmail" class="col-lg-4 col-form-label">Product Name</label>
      <div class="col-lg-8">
        
        <?php echo form_input(['name'=>'productName','class'=>'form-control','placeholder'=>'Product Name','value'=>set_value('productName')]); ?>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
      <br><br>
      <?php echo form_error('productName');?>
    </div>
  </div>

<div class="row">
      <div class="col-lg-6">
        <div class="form-group">
      <label for="inputEmail" class="col-lg-4 col-form-label">Product Size</label>
      <div class="col-lg-8">
        
        <?php echo form_input(['name'=>'productSize','class'=>'form-control','placeholder'=>'Product Size','value'=>set_value('productSize')]); ?>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
      <br> <br>
      <?php echo form_error('productSize');?>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
      <label for="inputEmail" class="col-lg-4 col-form-label">Product Price</label>
      <div class="col-lg-8">
        
        <?php echo form_input(['name'=>'productPrice','class'=>'form-control','placeholder'=>'Product Price','value'=>set_value('productPrice')]); ?>
      </div>
    </div>
    </div>
    <div class="col-lg-4">
      <br> <br>
      <?php echo form_error('productPrice');?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
   
     <?php echo form_submit(['value'=>'Add','class'=>'btn btn-primary']); ?>
     <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-secondary']); ?>
     
      </div>
    </div>
    </fieldset>
   <?php echo form_close(); ?>
</div>

<?php include('footer.php'); ?>