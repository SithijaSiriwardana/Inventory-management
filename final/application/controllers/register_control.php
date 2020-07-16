<?php

	class register_control extends CI_Controller{

		public function register_user()
		{
			
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[account.email]');
			$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('conform_password', 'Conform Password', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('login_view/register_page');
            }
            else
            {
				$this->load->model('model_user');
				$response = $this->model_user->insert_user_data();

				if($response)
				{
					/* msg - "key" eka registered succesfully..please login kiyanne "value" eka  */
					$this->session->set_flashdata('msg','registered succesfully..please login');
					redirect('login_control/login_user');
				}

				else
				{
					$this->session->set_flashdata('msg','something went wrong');
					redirect('login_control/register');
				}
            }
		}

	}

?>
