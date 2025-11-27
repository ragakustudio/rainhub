<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('auth/login');
    }

    public function login() {

    $email    = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->User_model->get_by_email($email);

    if (!$user) {
        echo "User not found";
        return;
    }

    if (!password_verify($password, $user->password)) {
        echo "Wrong password";
        return;
    }

    // Set session
    $this->session->set_userdata([
        'user_id'   => $user->id,
        'name'      => $user->name,
        'username'  => $user->username,
        'email'     => $user->email,
        'role'      => $user->role,
        'logged_in' => true
    ]);

    redirect('dashboard');
}



    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
