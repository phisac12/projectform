<?php

$nome1 = $_POST['nome'];
$sobrenome1 = $_POST['sobrenome'];
$email1 = $_POST['email'];
$opcao1 = $_POST['options'];
$textarea1 = $_POST['textarea'];

$servidor = 'localhost';
$usuario  = 'root';
$senhaServidor = '';
$banco = 'cadastro';

$conexao = new mysqli($servidor, $usuario, $senhaServidor, $banco);

if ($conexao->connect_error){

    die('Conexão Falhou' . $conexao->connect_error);

}

$info = "INSERT INTO formulario (nome, sobrenome, email, opcao, textarea) VALUES 
('$nome1', '$sobrenome1', '$email1', '$opcao1', '$textarea1')";

if ($conexao->query($info) === true){

echo "Congratulations seu formulario foi enviado com sucesso!!";

} else {

    echo "Ocorreu algum problema de conexão, tente novamente mais tarde!" . $conexao->error;

}

$conexao->close();



?>