<?php
namespace SPS\controller;

use MocaBonita\controller\Controller;
use SPS\model\Teste;

class SPSTeste extends Controller
{

    public function indexAction()
    {
        return $this;
    }

    public function createAction(){
        return $this;
    }

    public function loginShortcode(){
        $this->view->setView($this->view->getTemplate(), 'sps_uema', 'index');
    }
}