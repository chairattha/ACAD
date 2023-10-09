<?php
class SchoolModel extends CI_Model
{
    public function get_school()
    {
        $this->db->select('a.id as school_id,a.name as school_name,logo as school_logo');
        $this->db->select('a.tambol as school_tambol,a.amphur as school_amphur,a.province as school_province,a.zipcode as school_zipcode,a.phone as school_phone');
$this->db->select('b.id as school_type_id,b.name as school_type_name');
        $this->db->from('tb_school a');
        $this->db->join('tb_school_type b', 'b.id = a.school_type_id');
        $this->db->where(array('a.id' => 1));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_school()
    {

    }
    public function update_school($id,$data)
    {  
        $this->db->where('id', $id);
        $this->db->update('tb_school', $data);
        // return $this->input->post("inSchoolName");
    }

    public function get_school_type()
    {
        $this->db->select('id as school_type_id,name as type_name')->from('tb_school_type');
        $query = $this->db->get();
        return $query->result_array();
    }

}