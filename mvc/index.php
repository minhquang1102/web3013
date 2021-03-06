<?php

require_once './vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\CartController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'chi-tiet':
        $ctr = new HomeController();
        $ctr->detail();
        break;
    case 'gio-hang':
        $ctr = new CartController();
        $ctr->index();
        break;
    default:
        # code...
        break;
}

?>