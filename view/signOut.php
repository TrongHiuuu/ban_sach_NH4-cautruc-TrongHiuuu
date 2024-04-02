<?php
    include "../lib/session.php";
    session_unset();
    header('location:index.php');
?>