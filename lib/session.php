<?php
    session_start();
    if(!isset($_SESSION)) {
        $_SESSION['user'] = ['username' => '', 'fullname' => ''];
    }
    function user_session_unset() {
        $_SESSION['user'] = ['username' => '', 'fullname' => ''];
    }
    function reset_password_session($inputEmail) {
        $_SESSION['reset_password'] = ['username' => '', 'verify_code' => ''];
        $_SESSION['reset_password']['username'] = $inputEmail;
        $randomize = random_int(100000, 999999);
        $_SESSION['reset_password']['verify_code'] = strval($randomize);
    }
    function reset_password_session_unset() {
        $_SESSION['reset_password'] = ['username' => '', 'verify_code' => ''];
    }
?>
