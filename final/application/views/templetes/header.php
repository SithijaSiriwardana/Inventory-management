<!-- <!DOCTYPE html>
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
<body> -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- <a href="#" class="navbar-brand"><?php echo img('images/bb.jpg'); ?></a> -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="<?php echo site_url('login_control/'); ?>" class="nav-item nav-link active">DashBoard</a>
            <a href="<?php echo site_url('Home/index'); ?>" class="nav-item nav-link active">Products</a>
            <a href="<?php echo site_url('Order/read'); ?>" class="nav-item nav-link">Orders</a>
            <a href="<?php echo site_url('Users/'); ?>" class="nav-item nav-link">Employees</a>
            <a href="<?php echo site_url('Suplier_con/suplier_retriew'); ?>" class="nav-item nav-link">Supliers</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="<?php echo site_url('login_control/logout'); ?>" class="nav-item nav-link">Log Out</a>
        </div>
    </div>
</nav>
