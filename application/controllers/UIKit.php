<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UIkit extends CI_Controller {
  public function __construct(){
    parent::__construct();
    is_logged_in(); // kalau kamu pakai guard seperti ini
  }

  public function index(){
    $data = [];
    $data['page_title'] = 'UI Kit';
    $data['active'] = 'uikit';
    $data['content'] = $this->load->view('ragaku_ui_kit/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
}
