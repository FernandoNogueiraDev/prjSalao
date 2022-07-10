<?php
    require_once('../model/Servico.php');

    header("Location: form-servico.php?msg=1");

    $servico = new Servico();

    $servico->setDescServico($_POST['txtdescricao']);
    $servico->setTextoServico($_POST['texto']);
    
    $nome = $_FILES['foto']['name'];
    
    $arquivo = $_FILES['foto']['tmp_name'];

    $caminhoimagem = "imagens/servico/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $servico->setFotoServico($caminhoimagem);

    $servico->cadastrar($servico);
        
?>