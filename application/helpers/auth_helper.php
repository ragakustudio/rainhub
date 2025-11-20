<?php
function is_logged_in() {
    $CI =& get_instance();
    if (!$CI->session->userdata('logged_in')) {
        redirect('auth');
    }
}
