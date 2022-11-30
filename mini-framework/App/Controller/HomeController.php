<?php

namespace Staditek\App\Controller;

use Staditek\App\Model\UserModel;

class HomeController{
    public $header;

    public function __construct()
    {
        $this -> header = new UserModel();
    }

    public function index(){
        require_once __DIR__. '/../view/template/header.html';
        $a=$this->header->show();
        require_once __DIR__. '/../view/template/index.php';
        require_once __DIR__. '/../view/template/footer.html';

    }
}
