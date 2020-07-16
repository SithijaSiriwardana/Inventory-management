<!DOCTYPE html>
<html>

<head>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dash.css')?> " >
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>



  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Dashboard </h3>
        </h3>
      </div>

      <ul class="list-unstyled components">
        <!-- <p>Dummy Heading</p> -->
        <li class="active">
          <a href="<?php echo site_url('Home/create'); ?>">+ Add product</a>

        </li>
 
        <li>
          <a href="<?php echo site_url('Users/addnew'); ?>">+ Add employee</a>
        </li>
        <li>
          <a href="<?php echo site_url('Suplier_con/suplier'); ?>">+ Add supiler</a>
        </li>



      </ul>


    </nav>

    <!-- Page Content Holder -->
    <div id="content">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo site_url('login_control/logout'); ?>"><button type="button" class="btn btn-primary">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>
            <div class="row">
              <div class="col-sm-3">
              <?php echo img('images/product.jpg');?>
              <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <br>
                <h3 class="card-text">Total Products - <?php echo $total_products ?></h3>
                <div class="text-left">
                <a href="<?php echo site_url('Home/index'); ?>"><button type="button" class="btn btn-primary">View Products</button></a>
                </div>
              </div>
              </div>

              <div class="col-sm-3">
              <?php echo img('images/order.jpg');?>
              <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <br>
                <h3 class="card-text">Total Orders - <?php echo $total_orders ?></h3>
                <div class="text-left">
                <a href="<?php echo site_url('Order/read'); ?>"><button type="button" class="btn btn-primary">View Orders</button></a>
                </div>
              </div>
              </div>

              <div class="col-sm-3">
              <?php echo img('images/emp.jpg');?>
              <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <br>
                <h3 class="card-text">Total Employees - <?php echo $total_employees ?></h3>
                <div class="text-left">
                <a href="<?php echo site_url('Users/'); ?>"><button type="button" class="btn btn-primary">View Employees</button></a>
                </div>
              </div>
              </div>

              <div class="col-sm-3">
              <?php echo img('images/suplier.jpg');?>
              <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <br>
                <h3 class="card-text">Total Supliers - <?php echo $total_supliers ?></h3>
                <div class="text-left">
                <a href="<?php echo site_url('Suplier_con/suplier_retriew'); ?>"><button type="button" class="btn btn-primary">View Supliers</button></a>
                </div>
              </div>
              </div>
            </div>

    </div>
  </div>

  





  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {


      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>