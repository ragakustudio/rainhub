<?php
class Deliverable_model extends CI_Model {

    public function get_all() {
        return $this->db
            ->order_by('name', 'ASC')
            ->get('deliverables') // <-- harus plural
            ->result();
    }

}
