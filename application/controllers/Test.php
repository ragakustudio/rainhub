<?php
class Test extends CI_Controller {
    public function index()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        echo "Testing controller OK<br>";

        // coba load model
        $this->load->model('Portfolio_model');
        echo "Portfolio model loaded<br>";

        // coba load view
        $this->load->view('portfolio/index');
    }
}
