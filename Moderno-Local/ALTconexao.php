<?php
$usuario = 'id19989027_login_auth';
$senha = '\cQ6fj4B2RoPg5v?';
$database = 'id19989027_db_login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha ao concetar ao banco de dados: " . $mysqli->error);
}
