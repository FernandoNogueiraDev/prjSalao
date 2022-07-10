<?php

require_once('Conexao.php');

class Usuario
{
    private $idUsuario;
    private $nomeUsuario;
    private $loginUsuario;
    private $senhaUsuario;

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function getLoginUsuario(){
        return $this->loginUsuario;
    }
    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }
    public function setLoginUsuario($loginUsuario){
        $this->loginUsuario = $loginUsuario;
    }
    public function setSenhaUsuario($senhaUsuario){
        $this->senhaUsuario = $senhaUsuario;
    }

    public function cadastrar($usuario){
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbUsuario(nomeUsuario, loginUsuario, senhaUsuario)
                                VALUES (?,?,?)");
        $stmt->bindValue(1, $usuario->getNomeUsuario());
        $stmt->bindValue(2, $usuario->getLoginUsuario());
        $stmt->bindValue(3, $usuario->getSenhaUsuario());  

        $stmt->execute();
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * FROM tbusuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

   
}

?>