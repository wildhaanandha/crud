<?php
class Mymodel extends CI_Model{
    
    public function GetMahasiswa($table)
    {
        $res=$this->db->get($table);
        return $res->result_array();
    }
    
    public function insert($table,$data)
    {
        $res = $this->db->insert($table, $data);
        return $res;
    }
    
    public function update($table, $data, $where)
    {
        $res = $this->db->update($table, $data, $where);
        return $res;
    }
    
    public function delete($table, $where)
    {
        $res = $this->db->delete($table, $where);
        return $res;
    }
    
    public function GetWhere($table, $data)
    {
        $res =$this->db->get_where($table, $data);
        return $res->result_array();
    }
}


