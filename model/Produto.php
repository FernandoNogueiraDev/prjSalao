<?php

require_once('Conexao.php');

class Produto{

    private $idProduto;
    private $descProduto;
    private $textoProduto;
    private $fotoProduto;

    

    public function getIdProduto(){
        return $this->idProduto;
    }
    public function getDescProduto(){
        return $this->descProduto;
    }
    public function getTextoProduto(){
        return $this->textoProduto;
    }
    public function getFotoProduto(){
        return $this->fotoProduto;
    }


    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }
    public function setDescProduto($descProduto){
        $this->descProduto = $descProduto;
    }
    public function setTextoProduto($textoProduto){
        $this->textoProduto = $textoProduto;
    }
    public function setFotoProduto($fotoProduto){
        $this->fotoProduto = $fotoProduto;
    }

    public function cadastrar($produto){
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbProduto(descProduto, textoProduto, fotoProduto,idUsuario)
                                VALUES (?,?,?,?)");
        $stmt->bindValue(1, $produto->getDescProduto());
        $stmt->bindValue(2, $produto->getTextoProduto());
        $stmt->bindValue(3, $produto->getFotoProduto());
        $stmt->bindValue(4, 1);                        

        $stmt->execute();
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idproduto,descproduto,textoproduto,fotoproduto FROM tbproduto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}