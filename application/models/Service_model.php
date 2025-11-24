<?php
class Service_model extends CI_Model {

    public function get_all() {
        return $this->db->order_by('id', 'DESC')->get('services')->result();
    }

    public function get_by_id($id) {
        return $this->db->where('id', $id)->get('services')->row();
    }

    public function insert($data) {
        return $this->db->insert('services', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('services', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('services');
    }
    public function count_projects($service_id)
{
    return $this->db
        ->where('service_id', $service_id)
        ->count_all_results('portfolio_services');
}

public function count_usage($service_id)
{
    return $this->db
        ->where('service_id', $service_id)
        ->count_all_results('portfolio_services');
}


}
