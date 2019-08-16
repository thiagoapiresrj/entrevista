<?php

include './usuario.class.php';
$usuario = new Usuario();

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $dt_nasc = $_POST['dt_nasc'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $endereco = $_POST['end'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $usuario ->addUsuario($nome, $cpf, $dt_nasc, $email, $telefone, $endereco, $cidade, $estado);
    header("Location: index.php");
}
?>