<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kategori_model extends CI_MOdel{

    private $table ='kategori';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
    public function get_by_id($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('kategori')->row();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function delete($id)
    {
        return $this->db->delete($this->table,['id'=>$id]);
    }
    public function is_used($id)
    {
        return $this->db->where('kategori_id',$id)->count_all_results('buku')>0;
    }
    public function update($id, $data)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->table, $data);
    }
}