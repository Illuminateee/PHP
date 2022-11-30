<?php
// require_once 'trxHeaderController.php';
require_once __DIR__.'/vendor/autoload.php';

use OOP\App\TrxHeaderController;

$controller = new TrxHeaderController;

switch(@$_GET['page']){
    case 'show':
        $controller->show($_GET['id']);
        break;
    default:
        $controller ->index();
        break;
}
?>