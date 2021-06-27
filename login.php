<?php
require_once 'config.php';
require_once DBAPI;

$email = $_GET["email"];
$senha = $_GET["senha"];

$user = EfetuarLogin($email, $senha);

$_SESSION["UsuarioLogadoId"] = $user->id;
$_SESSION["UsuarioLogadoNome"] = $user->nome . ' ' . $user->sobrenome;

$data = ["resultado" => $user != null];
echo json_encode($data);