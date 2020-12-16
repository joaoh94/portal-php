<?php

$this->get('/', 'PagesController@portal');

$this->get('/home', 'PagesController@home');
$this->get('/quem-somos', 'PagesController@quemSomos');
$this->get('/contato', 'PagesController@contato');

$this->get('/cadastrocpf', 'PagesController@cadastrocpf');
$this->get('/cadastrocnpj', 'PagesController@cadastrocnpj');
$this->get('/esqueceu-senha', 'PagesController@esqueceu_senha');

$this->get('/login', 'PagesController@login');

$this->get('/produto', 'ProdutoController@index');

$this->get('/novo-produto', 'ProdutoController@novo');
$this->post('/insert-produto', 'ProdutoController@insert');

$this->get('/pesquisa', 'ProdutoController@pesquisar');
