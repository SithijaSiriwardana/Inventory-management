<?php 
class Home extends CI_Controller{

	public function index(){

		$this->load->model('Crudmodel');
		$records=$this->Crudmodel->getRecords();
		$this->load->view('templetes/header');
		$this->load->view('product_view/home',['records'=>$records]);
	  }
	  public function create(){
		$this->load->view('templetes/header');
	  	$this->load->view('product_view/create');
	  }

	  public function save(){
	  	$this->form_validation->set_rules('productName','productName','required');
	  	$this->form_validation->set_rules('productSize','productSize','required');
	  	$this->form_validation->set_rules('productPrice','productPrice','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	  	if($this->form_validation->run())
	  	{
	  		$data=$this->input->post();
	  		$this->load->model('Crudmodel');
	  		if($this->Crudmodel->saveRecord($data) )
	  		{
                $this->session->set_flashdata('response','Record saved successfully.');
	  		}
	  		else
	  		{
                $this->session->set_flashdata('response','Record failed to save..!');
	  		}
			  $this->load->model('Crudmodel');
			  $records=$this->Crudmodel->getRecords();
			  $this->load->view('templetes/header');
			  $this->load->view('product_view/home',['records'=>$records]);
	  	}
	  	else
	  	{
			$this->load->view('templetes/header');
	  		$this->load->view('product_view/create');
	  	}
	  }
	  public function edit($record_id){
	  	  $this->load->model('Crudmodel');
		  $record=$this->Crudmodel->getAllRecords($record_id);
		  $this->load->view('templetes/header');
          $this->load->view('product_view/update',['record'=>$record]);
	  }

	  public function update($record_id){
	  	$this->form_validation->set_rules('productName','productName','required');
	  	$this->form_validation->set_rules('productSize','productSize','required');
	  	$this->form_validation->set_rules('productPrice','productPrice','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	  	if($this->form_validation->run())
	  	{
	  		$data=$this->input->post();
	  		$this->load->model('Crudmodel');
	  		if($this->Crudmodel->updateRecords($record_id,$data) )
	  		{
                $this->session->set_flashdata('response','Record updated successfully.');
	  		}
	  		else
	  		{
                $this->session->set_flashdata('response','Failed to update..!');
	  		}
			  $this->load->model('Crudmodel');
			  $records=$this->Crudmodel->getRecords();
			  $this->load->view('templetes/header');
			  $this->load->view('product_view/home',['records'=>$records]);
	  	}
	  	else
	  	{
			$this->load->view('templetes/header');
	  		$this->load->view('product_view/update');
	  	}
	  }

	  public function delete($record_id){
	  	$this->load->model('Crudmodel');
	  	if($this->Crudmodel->deleteRecord($record_id) ){
             $this->session->set_flashdata('response','Record deleted successfully.');
	  	}
	  	else{
            $this->session->set_flashdata('response','Failed to delete..!');
        }
		$this->load->model('Crudmodel');
		$records=$this->Crudmodel->getRecords();
		$this->load->view('templetes/header');
		$this->load->view('product_view/home',['records'=>$records]);
	  	
	  }



public function filteraRecord()
	 {
		$this->load->view('templetes/header');
	 	$this->load->view('product_view/filter');
	 }

	 public function fetcha()
	 {
	 	$output='';
	 	$query='';
	 	$this->load->model('Crudamodel');
	 	if($this->input->post('query'))
	 	{
	 		$query=$this->input->post('query');
	 	}
	 	$data = $this->Crudamodel->fetcha_data($query);
	 	$output.='<div class="table-responsive">
	 	    <table class="table table-bordered table-striped">
	 	    <tr>
	 	    <th>Owner ID</th>
            <th>Animal ID</th>
            <th>Animal Type</th>
            <th>Animal Age</th>
            <th>Last Coming</th>
            </tr>';
         if($data->num_rows() >0)
         {
            foreach($data->result() as $row)
            {
            	$output.='<tr>
            	             <td>'.$row->own_id.'</td>
            	             <td>'.$row->ani_id.'</td>
            	             <td>'.$row->ani_type.'</td>
            	             <td>'.$row->ani_age.'</td>
            	             <td>'.$row->last_coming.'</td>
            	          </tr>
            	 ';
            }
         }
         else
         {
         	$output.='<tr>
         	             <td colspan="5">No Data Found</td>
         	             </tr>'; 
         }
         $output.='</table>';
         echo $output;
            
	 }
























	  
}
  
?>
