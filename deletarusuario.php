<?php
include './usuario.class.php';
$usuario = new Usuario();
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $usu = $usuario->deletar($id);
    header('Location: index.php');
}else{
    header('Location: index.php');
    exit;
}

?>
