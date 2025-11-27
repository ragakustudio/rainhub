<?php
include 'index.php';
$CI =& get_instance();

$CI->load->library('session');

// SET session
if (!isset($_GET['check'])) {
    $CI->session->set_userdata('logged_in', true);
    echo "Session set. <a href='?check=1'>Check session</a>";
    exit;
}

// CHECK session
var_dump($CI->session->userdata('logged_in'));
