<?php

if(!$_SESSION['usuario']) {
	header('Location: {{BASE}}login/');
	exit();
}