<!DOCTYPE html>
<html>
<head>
	<title>Polithin page 1</title>

	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home_page.css')?> " >
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	

	<STYLE>A {text-decoration: none;} </STYLE><!--Remove the Underline from All Hyperlinks-->

	<div class="top-bar">

		<center>
			
			<div class="top-bar-links">

			<ul>
				
				<li><a href="<?php echo site_url('login_control/sign_in'); ?>">SIGN IN</a></li>
				<li><a href="<?php echo site_url('login_control/register'); ?>">REGISTER</a></li>
				<li><a href="<?php echo site_url('login_control/products'); ?>">PRODUCTS</a></li>
				<li><a href="<?php echo site_url('login_control/location'); ?>">SHOPS LOCATIONS</a></li>

				</ul>
		
		</div><!--top-bar-links-->

	</center>
	
</div><!--top-bar-->
<!--<img src="?php echo base_url('assets/images/background.jpg');?>" alt="" style="width : 1900px;"-->

</head>
<body>

<div class="topic">
<center>
	
	<h1>Welcome to Bagya Polythene Center</h1>
</center>
</div>

<div class="about1">
<h3>What Are The Different Types of Polyethylene?</h3>
<p>
Polyethylene is commonly categorized into one of several major compounds of which the
most common include LDPE, LLDPE, HDPE, and Ultrahigh Molecular Weight Polypropylene. 
Other variants include Medium Density Polyethylene (MDPE), 
Ultra-low-molecular-weight polyethylene (ULMWPE or PE-WAX),
High-molecular-weight polyethylene (HMWPE), 
High-density cross-linked polyethylene (HDXLPE), 
Cross-linked polyethylene (PEX or XLPE), Very-low-density polyethylene (VLDPE), 
and Chlorinated polyethylene (CPE).
</p>
</div>

<div class="video">
<h2>Environmentally friendly process of plastics recycling</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/x9rXCPlRF78?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!--iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1"-->
</!--iframe>
</div>
<style>
	#myFooter {
	background-color: #373a48;
	color:white;
}

#myFooter .footer-copyright{
	background-color: #383737;
	padding-top:3px;
	padding-bottom:3px;
	text-align: center;
}

#myFooter .footer-copyright p{
	margin:10px;
	color: #ccc;
}

#myFooter ul{
	list-style-type: none;
    padding-left: 0;
    line-height: 1.7;

}

#myFooter h5{
	font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter a{
	color:#d2d1d1;
	text-decoration: none;
}

#myFooter a:hover, #myFooter a:focus{
	text-decoration: none;
	color:white;
}

#myFooter .myCols{
	text-align: center;
}

#myFooter .social-networks{
	text-align: center;
	padding-top: 30px;
	padding-bottom: 38px;
}

#myFooter .social-networks a{
    font-size: 32px;
    margin-right: 5px;
    margin-left: 5px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover{
	text-decoration: none;

}

#myFooter .facebook:hover{
	color:#0077e2;
}

#myFooter .google:hover{
	color:#ef1a1a;
}

#myFooter .twitter:hover{
	color: #00aced;
}

@media screen and (max-width: 767px){
	#myFooter {
		text-align: center;
	}
}





.content{
	flex: 1 0 auto;
	-webkit-flex: 1 0 auto;
	min-height: 200px;
}

#myFooter{
	flex: 0 0 auto;
    -webkit-flex: 0 0 auto;
}
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 myCols">
                    <h5>Address</h5>
                    <p>No. 405, Colombo Road, Pepiliyana,</p>
                    <p>Boralesgamuwa, Sri Lanka.</p>
                    <!-- <p>AA 99999</p> -->
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Contacts</h5>
                    <p>Email:bagyapoly@gmail.com </p>
                      <p>Phone: +94412251364 </p>
                        <p>Fax: +94778542125</p>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Feedback</h5>
                    <p>Please mail us your ideas, bug reports, suggestions! Any feedback would be appreciated .</p>

                        
                </div>
                
            </div>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Text </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</body>
</html>
