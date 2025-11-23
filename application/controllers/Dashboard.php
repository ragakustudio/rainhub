<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index()
{
    $data['page_title'] = 'Dashboard';
    $data['active'] = 'dashboard';

    $viewData = [
        // data apapun untuk view
    ];

    $data['content'] = $this->load->view('dashboard/index', $viewData, true);
    $this->load->view('layouts/main', $data);
}

}
