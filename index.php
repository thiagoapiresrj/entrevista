<?php
include './usuario.class.php';
$usuario = new Usuario();
?>

<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1><center>Lista de Usuarios</center></h1>
        <h5 class="text-center text-primary">
            <?php 
                if (isset($_SESSION['erro_cadusuario'])){
                      echo $_SESSION['erro_cadusuario'];
                      unset($_SESSION['erro_cadusuario']);
                }else if (isset($_SESSION['cadusuario'])){
                      echo $_SESSION['cadusuario'];
                      unset($_SESSION['cadusuario']);
                }else if (isset($_SESSION['caddeletado'])){
                      echo $_SESSION['caddeletado'];
                      unset($_SESSION['caddeletado']);
                }else if (isset($_SESSION['cadatualizado'])){
                      echo $_SESSION['cadatualizado'];
                      unset($_SESSION['cadatualizado']);
                }
                
            ?>
        </h5>
        <a href="adicionausuario.php" class="btn text-success">Novo Usuário</a>
        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-success">Id</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data Nacimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Ação</th>
            </tr>
            
            <?php
                //aqui irei lista na tabela os dados dos usuarios cadastrados.
                $lista = $usuario->getAllUsuario();
                foreach ($lista as $item):
            ?>
            <tr>
                <td><?php echo $item['usu_id']?></td>
                <td><a href="alterausuario.php?id=<?php echo $item['usu_id']?>"><?php echo $item['usu_nome']?></a></td>
                <td><?php echo $item['usu_cpf']?></td>
                <td><?php echo $item['usu_dt_nasc']?></td>
                <td><?php echo $item['usu_email']?></td>
                <td><?php echo $item['usu_telefone']?></td>
                <td><?php echo $item['usu_endereco']?></td>
                <td><?php echo $item['usu_cidade']?></td>
                <td><?php echo $item['usu_estado']?></td>
                <td><a href="deletarusuario.php?id=<?php echo $item['usu_id']?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Excluir</a></td>
            </tr>
            <?php endforeach;?>
        </table>
        
    </body>
</html>