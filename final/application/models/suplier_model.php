<?php
 class suplier_model extends CI_Model{

 	function insert_data(){
 		$data =array(
 			'Id'=> $this->input->post('Id'),
   			'Suplier_Name'=> $this->input->post('Suplier_Name'),
   			'Date'=>$this->input->post('Date'),
   			'Contact_No'=>$this->input->post('Contact_No'),
   			'Address'=>$this->input->post('Address'),
   			'Item_Code'=>$this->input->post('Item_Code'),

   		);
         $this->db->insert('suplier_details',$data);//pass insert data to database
 	}

 	public function view_data(){
 	$data= $this->db->get('suplier_details');
   	return $data;
	 }

	 
	  public function edit($Id){

		 $data =array(
			'Id'=> $this->input->post('Id'),
			  'Suplier_Name'=> $this->input->post('Suplier_Name'),
			  'Date'=>$this->input->post('Date'),
			  'Contact_No'=>$this->input->post('Contact_No'),
			  'Address'=>$this->input->post('Address'),
			  'Item_Code'=>$this->input->post('Item_Code'),

		  );
		  if($Id==0){
			  return $this->db->insert('suplier_details',$data);

		  }else{
			  $this->db->where('Id',$Id);
			  return $this->db->update('suplier_details',$data);
			  
		  }
       
     }
	 
	//  public function update_suplier($Id){
    //     $data =array(
	// 		'Id'=> $this->input->post('Id'),
	// 		  'Suplier_Name'=> $this->input->post('Suplier_Name'),
	// 		  'Date'=>$this->input->post('Date'),
	// 		  'Contact_No'=>$this->input->post('Contact_No'),
	// 		  'Address'=>$this->input->post('Address'),
	// 		  'Item_Code'=>$this->input->post('Item_Code'),

	// 	  );
	// 	  if($Id==0){
	// 		  return $this->db->insert('suplier_details',$data);

	// 	  }else{
	// 		  $this->db->where('Id',$Id);
	// 		  return $this->db->update('suplier_details',$data);
	// 	  }
	//  }

 	// public function delete_data($Id){
 	// 	 // $this->db->delete('suplier_details',array('Id'=>$this->input->post('Id')));
 	// 	// $this->db->delete('suplier_details', array('Id' => $Id));]
 	// 	$this->db->delete('suplier_details', array('suplier_ID' => $Id));
 		
 	// }
 }

?>