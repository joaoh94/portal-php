<?php
define('HOST', '45.34.12.248:3306');
define('USUARIO', 'joao12');
define('SENHA', 'canaltiyoutube1');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: {{BASE}}');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
echo "redirecionando...";
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: {{BASE}}home/');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: {{BASE}}');
	exit();
}