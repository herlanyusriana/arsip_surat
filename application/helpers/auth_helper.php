<?php
// application/config/autoload.php
$autoload['helper'] = array('url', 'auth');
function is_admin()
{
    return isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1;
}

function is_logged_in()
{
    return isset($_SESSION['email']);
}

