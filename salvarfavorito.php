<?php
require_once 'config.php';
require_once DBAPI;

$imovel = $_GET["imovel"];
$usuario = $_GET["usuario"];
$acao = $_GET["acao"];

if($acao == "adicionar")
    salvarfavorito($usuario, $imovel);
else
    removerfavorito($usuario, $imovel);

$data = ["resultado" => true];
echo json_encode($data);