<?php
include './usuario.class.php';
$usuario = new Usuario();
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $usu = $usuario->selecionaUsuario($id);
    if(empty($usu['usu_id'])){
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: index.php');
    exit;
}

?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script 
            type="text/javascript">$("#tel").mask("(00) 0000-00000");
            type="text/javascript">$("#dt_nasc").mask("00/00/0000");
            type="text/javascript">$("#cpf").mask("000.000.000-00");
        </script>
        <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
    </head>
    </head>
    <body>
        <h1><center>Alterar Usuários</center></h1>
        <form method="POST" action="alterusuario.php">
            <input type="hidden"   name="id" value="<?php echo $usu['usu_id']?>"required/>
            Nome:<br/>
            <input type="text" name="nome" value="<?php echo $usu['usu_nome']?>" required/><br/><br/>
            CPF:<br/>
            <input type="text" id="cpf" name="cpf" value="<?php echo $usu['usu_cpf']?>" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"/><br/><br/>
            Data Nasc:<br/>
            <input type="text" id="dt_nasc" name="dt_nasc" value="<?php echo $usu['usu_dt_nasc']?>" required pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/\d{4}"/><br/><br/>
            Email:<br/>
            <input type="email" name="email" value="<?php echo $usu['usu_email']?>" required/><br/><br/>
            Telefone:<br/>
            <input type="text" id="tel" name="tel" value="<?php echo $usu['usu_telefone']?>" required pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"/><br/><br/>
            Endereço:<br/>
            <input type="text" name="end" value="<?php echo $usu['usu_endereco']?>" required/><br/><br/>
            Cidade:<br/>
            <input type="text" name="cidade" value="<?php echo $usu['usu_cidade']?>" required/><br/><br/>
            Estado:<br/>
            <input type="text" name="estado"  value="<?php echo $usu['usu_estado']?>" required/><br/><br/>
            
            <input type="submit" class="btn" value="Alterar"/>
        </form>        
    </body>
</html>