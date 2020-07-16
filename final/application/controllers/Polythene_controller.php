<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polythene_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login_view/home_page');
	}

	public function sign_in() /*********  nav bar eke SIGNIN eka click karama yanna ona page eka   #### href = "sign_in">SIGNIN  ####  *********** */
	{
		$this->load->view('login_view/sign_page');
	}

	public function register()     /*********  #### href = "register">SIGNIN  ####  *********** */
	{
		$this->load->view('login_view/register_page');
	}

	public function location()
	{
		$this->load->view('login_view/location_page');
	}
	
	public function shop_item()
	{
		$this->load->view('login_view/product_page');
	}
	/*public function register_page()
	{
		$this->load->view('register_page');
	}*/	
    
}
