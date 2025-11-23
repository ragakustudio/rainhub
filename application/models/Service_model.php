<?php
class Service_model extends CI_Model {
    public function get_all() {
        return $this->db->order_by('name','ASC')->get('services')->result();
    }
    public function insert($name) {
        return $this->db->insert('services', ['name'=>$name]);
    }
    public function delete($id) {
        return $this->db->delete('services', ['id'=>$id]);
    }
}