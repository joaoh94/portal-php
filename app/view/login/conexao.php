<?php
define('HOST', '45.34.12.248:3306');
define('USUARIO', 'joao12');
define('SENHA', 'canaltiyoutube1');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');