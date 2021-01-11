<?php

function is_logged_in()
{
    $ci = get_instance();
    // cek ada sesi ato nda
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}
