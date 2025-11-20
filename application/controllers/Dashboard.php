<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in(); // proteksi
    }

    public function index() {
        echo "Selamat datang di Dashboard RainHUB!";
    }
}
