<?php

$conexao = mysqli_connect('localhost:3306', 'root', '', 'loja');
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-login';

$conexao_login = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
