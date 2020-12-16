<?php

namespace app\controller;

use app\core\Controller;

class PagesController extends Controller
{

    public function portal()
    {
        $this->load('portal/main');
    }
    
    public function login()
    {
        $this->load('login/main');
    }

    public function home()
    {
        $this->load('home/main');
    }
    
    public function quemSomos()
    {
        $this->load('quem-somos/main');
    }

    public function contato()
    {
        $this->load('contato/main');
    }

    public function cep()
    {
        $this->load('cep/main');
    }

    public function cadastrocpf()
    {
        $this->load('cadastrocpf/main');
    }

    public function cadastrocnpj()
    {
        $this->load('cadastrocnpj/main');
    }
    
    public function esqueceu_senha()
    {
        $this->load('esqueceu-senha/main');
    }
}
