<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script 
            type="text/javascript">$("#tel").mask("(00) 0000-00000");
            type="text/javascript">$("#dt_nasc").mask("00/00/0000");
            type="text/javascript">$("#cpf").mask("000.000.000-00");
        </script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1><center>Adicionar Usuários</center></h1>
        <form method="POST" action="addusuario.php">
            Nome:<br/>
            <input type="text" name="nome" required><br/><br/>
            CPF:<br/>
            <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"><br/><br/>
            Data Nasc:<br/>
            <input type="text" id="dt_nasc"name="dt_nasc" required pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/\d{4}"><br/><br/>
            Email:<br/>
            <input type="email" name="email" required><br/><br/>
            Telefone:<br/>
            <input type="text" id="tel" name="tel" required pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"><br/><br/>
            Endereço:<br/>
            <input type="text" name="end" required><br/><br/>
            Cidade:<br/>
            <input type="text" name="cidade" required><br/><br/>
            Estado:<br/>
            <input type="text" name="estado" required><br/><br/>
            
            <input type="submit" class="btn" value="Adicionar"/>
        </form>        
    </body>
</html>