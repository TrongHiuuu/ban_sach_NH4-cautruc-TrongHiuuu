<?php
    function check_required($input) {
        if (empty($input)) {
            return "Phần này không được để trống";
        }
        else return "";
    }

    function check_email_is_valid($inputEmail) {
        if(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
            return "Email không hợp lệ";
        }
        else return "";
    }
    function check_email_is_existed($inputEmail) {
        require_once "mysqli.php";
        $sql = "SELECT * FROM taikhoan WHERE email= '".$inputEmail."' LIMIT 1";
        $row = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            return "Email này đã tồn tại";
        }
        else return "";
    }
    function check_password_is_correct($inputPW, $inputR_PW) {
        if($inputPW !== $inputR_PW) {
            return false;
        }
        else return true;
    }
?>