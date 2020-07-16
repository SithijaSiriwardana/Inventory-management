<?php
  class suplier_con extends CI_Controller{
    public function suplier(){
      $this->load->view('templetes/header');
    	$this->load->view('sup_view/add');//view add.php file 
    
    } 
    public function suplier_retriew(){
      $this->load->model('suplier_model');
      $data["view_data"]= $this->suplier_model->view_data();
      $this->load->view('templetes/header');
      $this->load->view('sup_view/suplier_view',$data);

    }

     public function suplier_delete($Id){
       
       $this->db->where('Id',$Id);
       $this->db->delete('suplier_details');
       $this->load->model('suplier_model');
       $data["view_data"]= $this->suplier_model->view_data();
       echo "successfully Deleted";
       $this->load->view('templetes/header');
       $this->load->view('sup_view/suplier_view',$data);
       
     }

     public function suplier_update($Id){
      $supliers = $this->db->get_where('suplier_details',array('Id'=>$Id))->row();
      $this->load->view('templetes/header');
      $this->load->view('sup_view/suplier_update',array('supliers'=>$supliers));
      }

      public function update($Id){
        $this->load->model('suplier_model');
        $sup= new suplier_model;
        $sup->edit($Id);
        $data["view_data"]= $this->suplier_model->view_data();
        $this->load->view('templetes/header');
        $this->load->view('sup_view/suplier_view',$data);
  
        // $sup = new suplier_model;
        // $sup->edit($Id);
        // redirect(site_url('suplier_con'));
      }
  


   public function suplier_vali(){
    	
    	

    	$this->form_validation->set_rules('Suplier_Name','Enter Suplier Name','required');
  		$this->form_validation->set_rules('Date','Enter date','required');
  		$this->form_validation->set_rules('Contact_No','Enter Contact No','required');
  		$this->form_validation->set_rules('Address','Enter Address','required');
  		$this->form_validation->set_rules('Item_Code','Enter Item Code','required');

  		if ($this->form_validation->run() == FALSE) {
        echo "unsuccessfully adding";
        $this->load->view('templetes/header');
  			$this->load->view('sup_view/add');
  			# code...
  		}
  		else{
        $this->load->model('suplier_model');//view sulpier model file
      $this->suplier_model->insert_data();//view insert data function of suplier model file
        echo "form validation true and successfully adding";
        $this->load->view('templetes/header');
        $this->load->view('sup_view/add');
  			
  		}
    }

  }


?>