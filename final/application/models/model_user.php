<?php

	class model_user extends CI_Model{

		function insert_user_data()
		{
			
			$data = array(

				'first_name' => $this->input->post('fname',TRUE),
				'last_name' => $this->input->post('lname',TRUE),
				'email' => $this->input->post('email',TRUE),
				'mobile_number' => $this->input->post('mobile_number',TRUE),
				'password' => $this->input->post('password',TRUE),   /* sha1 algorithem eka danne password eka nodanna string eka kata convert karanna */

			);

			/*print_r($data);    this use to print data
			die();*/
			
			return $this->db->insert('account',$data);

		}


		/* database eken data recode eka thiyanavada kiyala chek karala harinam hari varadinam varadi kiyana function eka "login_user() "*/

		function login_user()
		{
			/* database email password check
					   
				if exit -> session create
				else -> errors
			*/

			$email = $this->input->post('email');
			$password = $this->input->post('password');   /* sha1 algorithem eka danne password eka nodanna string eka kata convert karanna */
			
			$this->db->where('email',$email);
			$this->db->where('password',$password);
		

			$respond = $this->db->get('account');

			if($respond->num_rows()==1)
			{
				/*print_r($respond->row(0));
				die();  1 get compleat row*/

				return $respond->row(0);
				
			}

			
			else
			{
				/*echo "error";
				die(); 1 */

				return false;
			}

		}

	}

?>
