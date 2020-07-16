<!DOCTYPE html>
<html>
<head>
	<title>READ Operation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<br>
<div class="container">
<a href="<?php echo site_url('suplier_con/suplier/');?>" <button type="delete" class="btn btn-warning">Add new suplier</button></a>
 
       <h2>Suplier Details</h2>
       <!-- <header class="page-header header container-fluid">
    <div class="overlay"></div> -->
	<table class="table">


              <tr >
                     <td>Suplier Id</td>
                     <td>Suplier Name</td>
                     <td>Date</td>
                     <td>Contact NO</td>
                     <td>Address</td>
                     <td>Item Code</td>
                     <td>Active</td>
                     
              </tr>

              <?php
              foreach ($view_data->result() as $row){

              ?>
              <tr>
                     <td><?php echo $row->Id?></td>
                     <td><?php echo $row->Suplier_Name?></td>
                     <td><?php echo $row->Date?></td>
                     <td><?php echo $row->Contact_No?></td>
                     <td><?php echo $row->Address?></td>
                     <td><?php echo $row->Item_Code?></td>
                     <td>
                      
                      <div style="button{background-color: #f44336};button1{background-color: #f44336}">
                     <a href="<?php echo site_url('suplier_con/suplier_delete/'.$row->Id);?>" <button type="delete" class="btn btn-primary">Delete</button></a>
                     <a href="<?php echo site_url('suplier_con/suplier_update/'.$row->Id);?>" <button type="update" class="btn btn-danger">Update</button></a></td>
            
                 </div>
                   

              </tr>
              <?php


                    
		
		

      }
      ?>
		
	</table>
</div>

<!-- </header>
 -->              

</body>
</html>