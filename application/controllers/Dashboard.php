<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index() {
        $data['active'] = 'dashboard';
        $data['page_title'] = 'Dashboard';
        $data['content'] = $this->load->view('dashboard/index', [], true);

        $this->load->view('layouts/main', $data);
    }
}
