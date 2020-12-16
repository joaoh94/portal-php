{% extends 'partials/body.twig.php'  %}

{% block title %}Home - Mini Framework{% endblock %}

{% block body %}
<?php
if(!$_SESSION['usuario']) {
	header('Location: {{BASE}}');
	exit();
}
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<form action="{{BASE}}">
<input type="submit" name="logout" value="logout" onclick="logout()" />
</form>
<?php
function logout(){
    session_destroy();
}
?>

{% endblock %}