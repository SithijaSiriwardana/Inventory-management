<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Order extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Order_model');
    }
       
    public function create($id){
        $res =  $this->Order_model->view();
        $data['res'] = $res;
        $this->load->view('templetes/headercus');
        $this->load->view("order_view/create",$data);
    }
     
    public function create_post(){
        $data = array(
            'id' => $this->session->userdata('user_id'),
            'item' => $this->input->post('type'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('telephone'),
            'quantity' => $this->input->post('quantity')
         );

        $res = $this->Order_model->create($data);
		if($res == "success"){
            $res_id =  $this->Order_model->vieworders();
            $data['res_id'] = $res_id;
            $this->load->view('templetes/headercus');
            $this->load->view('order_view/view',$data);
		}else{
			redirect(base_url('Order/create_failed'));
		}
    }

    public function create_failed(){
		echo "create operation failed";
    }
    
    public function read(){
        $res_id =  $this->Order_model->vieworders();
        $data['res_id'] = $res_id;
        $this->load->view('templetes/header');
        $this->load->view('order_view/viewadmin',$data);
    }

    public function readcus(){
        $res_id =  $this->Order_model->read($this->session->userdata('user_id'));
        $data['res_id'] = $res_id;
        $this->load->view('templetes/headercus');
        $this->load->view('order_view/view',$data);
    }



    public function update($id){
        $data['crud_data'] = $this->Order_model->get_record_byID($id);
        if(!empty($data['crud_data'])){
            $this->load->view('templetes/headercus');
            $this->load->view('order_view/update',$data);
        }else{
            redirect(base_url());
        }
    }

    public function update_post($id){
        $data = array(
            'item' => $this->input->post('type'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('telephone'),
            'quantity' => $this->input->post('quantity')
         );

        $res = $this->Order_model->update($data,$id);
        if($res == "success"){
            $res_id =  $this->Order_model->vieworders();
            $data['res_id'] = $res_id;
            $this->load->view('templetes/headercus');
            $this->load->view('order_view/view',$data);
		}else{
			redirect(site_url('Order/update_failed'));
		}
    }
    public function update_failed(){
		echo "Update operation failed";
	}
	
	public function delete($id){
		$res = $this->Order_model->delete($id);
		if($res == "success"){
			$res_id =  $this->Order_model->vieworders();
            $data['res_id'] = $res_id;
            $this->load->view('templetes/headercus');
            $this->load->view('order_view/view',$data);
		}else{
			redirect(base_url('Order/delete_failed'));
		}
	}
	public function delete_failed(){
		echo "Delete operation failed";
	}

 
}

