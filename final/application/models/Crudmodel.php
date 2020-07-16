<?php 
  class Crudmodel extends CI_Model{

    public function getRecords(){
        $query = $this->db->get('product');
        return $query->result();
        
    }

    public function saveRecord($data){
      return $this->db->insert('product',$data);
    }

    public function getAllRecords($record_id){
      $query=$this->db->get_where('product',array('productCode'=>$record_id));
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
    }
    public function updateRecords($record_id, $data){
        return $this->db->where('productCode', $record_id)
        ->update('product',$data);
    }

    public function deleteRecord($record_id){
      return $this->db->delete('product',array('productCode'=>$record_id));
    }


public function fetch_data($query)
   {
      $this->db->select("*");
      $this->db->from("product");
      if($query!='')
      {
        $this->db->like('productCode',$query);
        $this->db->like('productName',$query);
        $this->db->or_like('productSize',$query);
        $this->db->or_like('productPrice',$query);
      }

      $this->db->order_by('productCode','DESC');
      return $this->db->get();
   }
    










  }
?>