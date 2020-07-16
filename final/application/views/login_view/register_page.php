<!DOCTYPE html>
<html>
<head>
	<title>Polithin page 1</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register_page.css')?> " >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Footer-with-social-icons.css')?> " >

	

	<STYLE>A {text-decoration: none;} </STYLE><!--Remove the Underline from All Hyperlinks-->

	<div class="top-bar">

		<center>
			
			<div class="top-bar-links">

			<ul>
				<li><a href="<?php echo site_url('login_control/home'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('login_control/sign_in'); ?>">SIGN IN</a></li>
				<li><a href="<?php echo site_url('login_control/products'); ?>">PRODUCTS</a></li>
				<li><a href="<?php echo site_url('login_control/location'); ?>">SHOPS LOCATIONS</a></li>


			</ul>
		
	        </div><!--top-bar-links-->

		</center>
		
	</div><!--top-bar-->
	<!--<img src="?php echo base_url('assets/images/background.jpg');?>" alt="" style="width : 1900px;"-->

</head>
<body>

<div class="registration_box">
		
		<!--h2>registration page</!--h2>

		<php if ($this->session->flashdata('msg')){

			echo "<h3>".$this->session->flashdata('msg')."</h3>";

		} ?>

		<hr-->
		<h1>REGISTER HERE</h1>
		
		<br>
		<br>
		<br>
		<br>
		<br>

		<?php echo validation_errors(); ?>
		<?php echo form_open('register_control/register_user'); ?>  <!--meka dammama form tag eka ona venne naa-->
		<!--<form>-->
			<div class="fname">
				<label for="exampleInputFirst Name">First Name</label>
				<input type="text" class="form-control" id="exampleInputFirst Name" placeholder="First Name" name="fname">
			</div>

			<div class="lname">
				<label for="exampleInputLast Name">Last Name</label>
				<input type="text" class="form-control" id="exampleInputLast Name" placeholder="Last Name" name="lname">
			</div>

			<div class="email">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
			</div>

			<div class="mobile_number">
				<label for="exampleInputMobile Number">Mobile Number</label>
				<input type="text" class="form-control" id="exampleInputMobile Numbere" placeholder="Mobile Number" name="mobile_number">
			</div>

			<div class="password">
				<label for="exampleInputPassword1">Password</label>
				<br>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			</div>

			<div class="conform_password">
				<label for="exampleInputPassword1">Conform Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Conform Password" name="conform_password">
			</div>
			
			<br>
			<br>
			<br>

			<center>
				<button type="submit" class="btn btn-default">Submit</button>
			</center>
				
			
		<!--</form>-->
		<?php echo form_close(); ?>


	</div><!--registration_box-->



</body>
</html>
