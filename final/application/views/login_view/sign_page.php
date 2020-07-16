<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sign_page.css')?> " >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Footer-with-social-icons.css')?> " >


	<STYLE>A {text-decoration: none;} </STYLE><!--Remove the Underline from All Hyperlinks-->

	<center>
		
		<div class="top-bar">

			
			<div class="top-bar-links">

		<ul>
			
			<li><a href="<?php echo site_url('login_control/home'); ?>">HOME</a></li>
			<li><a href="<?php echo site_url('login_control/register'); ?>">REGISTER</a></li>
			<li><a href="<?php echo site_url('login_control/products'); ?>">PRODUCTS</a></li>
			<li><a href="<?php echo site_url('login_control/location'); ?>">SHOPS LOCATIONS</a></li>

		</ul>
		
	</div><!--top-bar-links-->
		
	</div><!--top-bar-->

	</center>
	
</head>
<body>

	

	<div class="loginbox ">
		
				<!--img src="imges/avatar2.jpg" class="avatar"-->
				<!--img src="?php echo base_url('assets/images/avatar2.jpg');?>" alt="" >


				<!--login kotutika-->

				<h1>Log In Here</h1>
				<!php echo validation_errors(); ?>
				<?php echo form_open('login_control/login_user'); ?>  <!--meka dammama form tag eka ona venne naa-->
				<!--<form>-->
					<p>Email Address</p>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
					<p>password</p>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					<input type="Submit" name="" value="Log In"><br>
					<br>
					<a href="#">Lost your password?</a> <br>
					<a href="<?php echo site_url('login_control/register'); ?>">Don't Have an account?</a>
				<!--</form>-->
				<?php echo form_close(); ?>
		
	</div><!--loginbox-->

</body>
</html>
