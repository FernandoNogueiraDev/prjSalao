<?php
    require_once("../model/Agenda.php");
    require_once("../model/Cliente.php");
    require_once("../model/Servico.php");


    header("Location: form-Agenda.php?msg=1");

    $agenda = new Agenda();
    
    $cliente = new Cliente();
    $cliente->setIdCliente($_POST['txtidcliente']);

    $servico = new Servico();
    $servico->setIdServico($_POST['txtidservico']);

    $agenda->setDataAgenda($_POST['data']);
    $agenda->setHoraAgenda($_POST['hora']);
    $agenda->setCliente($cliente);
    $agenda->setServico($servico);

    $agenda->cadastrar($agenda);

    

?>