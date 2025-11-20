<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            return redirect('dashboard');
        }

        $this->load->view('auth/login');
    }

    public function login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->User_model->get_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'name'    => $user->name,
                'email'   => $user->email,
                'role'    => $user->role,
                'logged_in' => true
            ]);

            return redirect('dashboard');
        }

        $this->session->set_flashdata('error', 'Email atau password salah!');
        redirect('auth');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
