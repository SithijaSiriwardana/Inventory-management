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
    <div style="background-color: #BB8FCE ; padding-left: 20px;padding-right: -40px;padding-top: 20px;padding-bottom: 200px;margin-top: 20px;margin-left: 20px;margin-right: 20px;margin-bottom: 20px  ">

<form method="post" action="<?php echo site_url('suplier_con/update/'.$supliers->Id);?>">
  <div style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Id</label>
                <div class="col-md-9">
                    <input type="text" name="Id" class="form-control" value="<?php echo $supliers->Id; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Suplier_Name</label>
                <div class="col-md-9">
                    <input type="text" name="Suplier_Name" class="form-control" value="<?php echo $supliers->Suplier_Name; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Date</label>
                <div class="col-md-9">
                    <input type="text" name="Date" class="form-control" value="<?php echo $supliers->Date; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Contact_No</label>
                <div class="col-md-9">
                    <input type="text" name="Contact_No" class="form-control" value="<?php echo $supliers->Contact_No; ?>">
                </div>
            </div>
        </div>

         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Address</label>
                <div class="col-md-9">
                    <input type="text" name="Address" class="form-control" value="<?php echo $supliers->Address; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Item_Code</label>
                <div class="col-md-9">
                    <input type="text" name="Item_Code" class="form-control" value="<?php echo $supliers->Item_Code; ?>">
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <div style="margin-top: 30px ">
            <div style="margin-left: 10px">   
            <button type="submit" class="btn btn-danger" name="Save">Submit</button>
          <!--   <input type="submit" name="Save" class="btn"> -->
      </div>
  </div>
        </div>
    </div>
    
</form>
</div>
</div>
</body>
</html>