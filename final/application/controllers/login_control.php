<?php

class login_control extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Order_model');
		$this->load->model('DashBoard_Model');
		$this->load->model('model_user');
		$this->load->library('session');
	}
	
	public function index(){
		$data['total_products'] = $this->DashBoard_Model->countTotalProducts();
		$data['total_orders'] = $this->DashBoard_Model->countTotalOrders();
		$data['total_employees'] = $this->DashBoard_Model->countTotalEmployees();
		$data['total_supliers'] = $this->DashBoard_Model->countTotalSupliers();

		$this->load->view('dashboard',$data);
	}



	public function login_user()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view/sign_page');
		}
		else
		{
			$result = $this->model_user->login_user();

			if($result != false)
			{
				//set session
				$user_type=$result->user_type;
				$array_data = array(

					'user_id' => $result->id,
					'fname' => $result->first_name,
					'lname' => $result->last_name,
					'email' => $result->email,
					'mobile_number' => $result->mobile_number,
					'logged_in'=>TRUE
				);
				$this->session->set_userdata($array_data);

				/* print_r($_SESSION); print session */
				if($user_type=="admin"){

					$data['total_products'] = $this->DashBoard_Model->countTotalProducts();
					$data['total_orders'] = $this->DashBoard_Model->countTotalOrders();
					$data['total_employees'] = $this->DashBoard_Model->countTotalEmployees();
					$data['total_supliers'] = $this->DashBoard_Model->countTotalSupliers();

					$this->load->view('dashboard',$data);
				}
				else
				{
					// $res =  $this->Order_model->view();
					// $data['res'] = $res;
					// $this->load->view("order_view/create",$data);


					$res_id =  $this->Order_model->read($this->session->userdata('user_id'));
					$data['res_id'] = $res_id;
					// $data['id'] = $id;
					$this->load->view('templetes/headercus');
					$this->load->view('order_view/view',$data);
					//$this->session->set_flashdata('welcome','welcome back');
					//redirect('Polythene_controller/index');
				}
			
			}
			else
			{
				$this->session->set_flashdata('errormsg','wrong email or password');
				echo "worong email or password";
				redirect('login_control/register');
			}

		}
	}

	public function update($id){
        $data['crud_data'] = $this->Order_model->get_record_byID($id);
        if(!empty($data['crud_data'])){
            $this->load->view('order_view/update',$data);
        }else{
            redirect(base_url());
        }
    }

	public function sign_in() /*********  nav bar eke SIGNIN eka click karama yanna ona page eka   #### href = "sign_in">SIGNIN  ####  *********** */
	{
		$this->load->view('login_view/sign_page');
	}


	public function location()
	{
		$this->load->view('login_view/location_page');
	}
	
	public function home()
	{
		$this->load->view('login_view/home_page');
	}

	public function register()     /*********  #### href = "register">SIGNIN  ####  *********** */
	{
		$this->load->view('login_view/register_page');
	}

	public function products()     /*********  #### href = "register">SIGNIN  ####  *********** */
	{
		$this->load->view('login_view/shop_item_page');
	}

	public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login_view/sign_page');
    }

}

?>
