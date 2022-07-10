<?php
require_once('Cliente.php');
require_once('Conexao.php');

class Agenda
{
    private $idAgenda;
    private $dataAgenda;
    private $horaAgenda;
    private $idusuario; // adm 123 = cadastrar no banco e usar o codigo dele
    //private $idcliente; // classe cliente
    private $idservico; // classe serviço

    private $cliente;
    private $servico;
    
    public function getIdAgenda(){
        return $this->idagenda;
    }
    public function getDataAgenda(){
        return $this->dataagenda;
    }
    public function getHoraAgenda(){
        return $this->horaagenda;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }



    public function setIdAgenda($idagenda){
        $this->idagenda = $idagenda;
    }
    public function setDataAgenda($dataagenda){
        $this->dataagenda = $dataagenda;
    }
    public function setHoraAgenda($horaagenda){
        $this->horaagenda = $horaagenda;
    }
    public function setIdUsuario($idusuario){
        $this->idusuario = $idusuario;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getServico(){
        return $this->servico;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function setServico($servico){
        $this->servico = $servico;
    }

    

    public function cadastrar($agenda){
        
        //idusuario = código do seu adm no banco
        //$agenda->cliente->getIdCliente();
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbAgenda(dataAgenda, horaAgenda, idCliente, idUsuario, idServico)
                                VALUES (?,?,?,?,?)");
        $stmt->bindValue(1, $agenda->getDataAgenda());
        $stmt->bindValue(2, $agenda->getHoraAgenda());
        $stmt->bindValue(3, $agenda->cliente->getIdCliente());   
        $stmt->bindValue(4, 1);     
        $stmt->bindValue(5, $agenda->servico->getIdServico());                

        $stmt->execute();
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * FROM tbagenda";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    

    }

?>