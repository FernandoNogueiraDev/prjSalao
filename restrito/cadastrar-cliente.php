<?php
    require_once("../model/Cliente.php");

    header("Location: form-cliente.php?msg=1");

    $cliente = new Cliente();

    $cliente->setNomeCliente($_POST['txtnome']);
    $cliente->setCpfCliente($_POST['txtcpf']);
    $cliente->setCelularCliente($_POST['txtcelular']);

    $cliente->cadastrar2($cliente);

?>