<!DOCTYPE html>
<html>
   <body style="background-color:#8c8c8c">
   <head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/location.css')?> " >

   <div class="top-bar">

		<center>
			
			<div class="top-bar-links">

			<ul>
            <li><a href="<?php echo site_url('login_control/home'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('login_control/sign_in'); ?>">SIGN IN</a></li>
            <li><a href="<?php echo site_url('login_control/products'); ?>">PRODUCTS</a></li>
				<li><a href="<?php echo site_url('login_control/register'); ?>">REGISTER</a></li>


			</ul>
		
	        </div><!--top-bar-links-->

		</center>
		
	</div>

      <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
      <script>
         function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(17.609993, 83.221436), 
               zoom:12, 
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
         }
			
         google.maps.event.addDomListener(window, 'load', loadMap);
      </script>
      
   </head>
   
   <body>
      <div id = "sample" style = "width:1440px; height:600px;"></div>



       <h1><b>Hours of Operation</h1>

      <!-- <hr><hr> -->
 
<p><h2>
   

        Tuesday - Sunday       
<!-- <hr> -->

       09:30am – 7:00pm   <br>       
 WE ARE CLOSED

<!-- <hr> -->
 Monday & Poya Days

<br>
<br>
 <hr>
 <br>
<!-- <hr><hr><hr> -->
Address:

No:123/A,Ballapitiya,
Horana

<br><br>Contact us:
07771543318
</b></h2>
</p>



   </body>
   
</html>
