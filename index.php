<?php
include 'config/config.php';
include 'lib/connect.php';
require 'model/product.php';

if(isset($_GET['page'])&&($_GET['page']!=="")){
    switch(trim($_GET['page'])){
        case 'home':
            $result = getLimitProductBestSeller(12);
            require_once 'view/home.php';
            break;

        case 'bestSeller':
            $result = getAllProductBestSeller();
            require_once 'view/bestSeller.php';
            break;

        default:
        $result = getLimitProductBestSeller(12);
        require_once 'view/home.php';
        break;
    }
}
else{
    $result = getLimitProductBestSeller(12);
    require_once 'view/home.php';
}

?>