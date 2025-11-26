<?php
class Portfolio_model extends CI_Model {

    // GET ALL PORTFOLIO + SERVICE NAME
    public function get_all() {
    return $this->db
        ->select('p.*')
        ->from('portfolio p')
        ->order_by('p.id', 'DESC')
        ->get()
        ->result();
}


    // GET ONE PORTFOLIO
    public function get_by_id($id) {
    return $this->db
        ->select('p.*')
        ->from('portfolio p')
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

    public function assign_service($portfolio_id, $service_id)
{
    return $this->db->insert('portfolio_services', [
        'portfolio_id' => $portfolio_id,
        'service_id' => $service_id
    ]);
}


public function get_services($portfolio_id)
{
    return $this->db
        ->select('s.*')
        ->from('portfolio_services ps')
        ->join('services s', 's.id = ps.service_id')
        ->where('ps.portfolio_id', $portfolio_id)
        ->get()
        ->result();
}

public function get_services_by_portfolio($portfolio_id)
{
    return $this->db
        ->select('ps.service_id, s.name')
        ->from('portfolio_services ps')
        ->join('services s', 's.id = ps.service_id')
        ->where('ps.portfolio_id', $portfolio_id)
        ->get()
        ->result();
}



public function get_service_ids($portfolio_id)
{
    return array_column(
        $this->db->select('service_id')->get_where('portfolio_services', ['portfolio_id' => $portfolio_id])->result_array(),
        'service_id'
    );
}

public function get_deliverable_ids($portfolio_id)
{
    return array_column(
        $this->db->select('deliverable_id')->get_where('portfolio_deliverables', ['portfolio_id' => $portfolio_id])->result_array(),
        'deliverable_id'
    );
}



}
