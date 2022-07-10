<?php
    require_once("Conexao.php");

    class Cliente{
        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $celularCliente;

        public function getIdCliente(){
            return $this->idCliente;
        }
        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        public function getCpfCliente(){
            return $this->cpfCliente;
        }
        public function getCelularCliente(){
            return $this->celularCliente;
        }
        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }
        public function setCpfCliente($cpfCliente){
            $this->cpfCliente = $cpfCliente;
        }
        public function setCelularCliente($celularCliente){
            $this->celularCliente = $celularCliente;
        }

        public function cadastrar($cliente){
            $con = Conexao::conectar();
            $query = "INSERT INTO tbCliente(nomeCliente, cpfCliente, celularCliente)
                        VALUES ('".$cliente->getNomeCliente()."',
                                '".$cliente->getCpfCliente()."',
                                '".$cliente->getCelularCliente()."')";
            $con->exec($query);
        }

        public function cadastrar2($cliente){
            //prepare statement
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO tbCliente(nomeCliente, cpfCliente, celularCliente)
                                    VALUES(?,?,?)");
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * from tbcliente";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
    }