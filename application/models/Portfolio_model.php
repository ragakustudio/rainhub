<?php
class Portfolio_model extends CI_Model {

    // GET ALL PORTFOLIO + SERVICE NAME
    public function get_all() {
        return $this->db
            ->select('p.*, s.name as service_name')
            ->from('portfolio p')
            ->join('services s', 's.id = p.service_id', 'left')
            ->order_by('p.id', 'DESC')
            ->get()
            ->result();
    }

    // GET ONE PORTFOLIO
    public function get_by_id($id) {
        return $this->db
            ->select('p.*, s.name as service_name')
            ->from('portfolio p')
            ->join('services s', 's.id = p.service_id', 'left')
            ->where('p.id', $id)
            ->get()
            ->row();
    }

    // INSERT PORTFOLIO
    public function insert($data) {
        $this->db->insert('portfolio', $data);
        return $this->db->insert_id();
    }

    // UPDATE PORTFOLIO
    public function update($id, $data)
{
    return $this->db->where('id', $id)->update('portfolio', $data);
}


    // DELETE PORTFOLIO
    public function delete($id) {
        return $this->db->delete('portfolio', ['id' => $id]);
    }

    // ADD MULTI IMAGE
    public function add_image($portfolio_id, $filename, $is_cover = 0) {
        return $this->db->insert('portfolio_images', [
            'portfolio_id' => $portfolio_id,
            'filename' => $filename,
            'is_cover' => $is_cover
        ]);
    }

    // GET IMAGES PER PORTFOLIO
    public function get_images($portfolio_id) {
        return $this->db
            ->where('portfolio_id', $portfolio_id)
            ->get('portfolio_images')
            ->result();
    }
}
