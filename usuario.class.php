<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    ob_start();
    session_start();
}

class Usuario{
    private $pdo;
    
    //aqui eu crio  conexão com o banco de dados.
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=entrevista;host=localhost", "root", "");
    }
    //listar os usuarios cadastrados
    public function getAllUsuario() {
		$sql = "select * from usuario";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}
    //verificar se existe o email informado já está cadastrado no banco de dados.
    public function verificaEmail($email){
        $sql = "select * from usuario where usu_email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email',$email);
        //executando a query.
        $sql->execute();
        //verifico se o email exite, caso exista retorna true senao retorna false.
        if($sql->rowCount() > 0){
            return true;
        }else{            
            return false;
        }
    }
    //metodo para adicionar um usuario
    public function addUsuario($n,$cep,$dt,$em,$t,$end,$cid,$est){
        //aqui eu chamo a função para verificar se o email existe ou não.
        if($this->verificaEmail($em) == false){
            $sql = "insert into usuario (usu_nome,usu_cpf,usu_dt_nasc,usu_email, usu_telefone, usu_endereco, usu_cidade, usu_estado)"
                    . "value (:nome,:cep,:dt_nasc,:email,:telefone,:endereco,:cidade,:estado)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $n);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':dt_nasc', $dt);
            $sql->bindValue(':email', $em);
            $sql->bindValue(':telefone', $t);
            $sql->bindValue(':endereco', $end);
            $sql->bindValue(':cidade', $cid);
            $sql->bindValue(':estado', $est);
            
            //execuntando a query
            $sql->execute();
            return true;
            $_SESSION['cadusuario']= 'Usuário cadastrado!';
        }else{
            $_SESSION['erro_cadusuario']= 'Email já existe!';
            return false;
        }
    }
    
    public function alterarUsuario ($i,$n,$cpf,$dt,$em,$t,$end,$cid,$est){
        //varifico se o email informado já esta cadastrado.
            $sql = "update usuario set usu_nome = :nome, usu_cpf= :cpf, usu_dt_nasc= :dt_nasc, usu_email= :email,"
                     . "usu_telefone= :telefone, usu_endereco= :endereco, usu_cidade= :cidade, usu_estado= :estado where usu_id =:id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id', $i);
            $sql->bindValue(':nome', $n);
            $sql->bindValue('cpf', $cpf);
            $sql->bindValue('dt_nasc', $dt);
            $sql->bindValue('email', $em);
            $sql->bindValue('telefone', $t);
            $sql->bindValue('endereco', $end);
            $sql->bindValue('cidade', $cid);
            $sql->bindValue('estado', $est);
            
            //execuntando a query
            $sql->execute();
            $_SESSION['cadatualizado']= 'Usuário atualizado!';
    }
    public function deletar($id){
            $sql = "delete from usuario where usu_id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
            $_SESSION['caddeletado']= 'Usuário deletado!';
    }
    //seleciona o usuario para edição
    public function selecionaUsuario($id){
        $sql = "select * from usuario where usu_id = :id";
		$sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->execute();
                if($sql->rowCount()>0){
                    return $sql->fetch();
                }else{
                    return array();
                }
		
    }
}


?>