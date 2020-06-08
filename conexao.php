<?php


$servidor  = 'localhost';
$usuario   =  'root';
$senhaServ = '';
$banco     = 'cadastro';

$conexao   = new mysqli($servidor, $usuario, $senhaServ, $banco);

if ($conexao->connect_error){

    die('Erro de conexão: ' . $conexao->conect_error);

}



?>