<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link href="/css/carousel.css" rel="stylesheet">
    <link href="css/estilo.css">    
    <title>Barbearia</title>

    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Ellpa Barbearia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="servico.php">Serviços <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
  <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="produto.php">Loja <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="fale-conosco.php">Contato  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></a>

                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light" href="tela-login.php">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <h1 style="text-align: center;">Nossos Serviços</h1>
  

                <?php
                    require_once("model/Servico.php");
                    try {
                        $servico = new Servico();
                        $listaServico = $servico->listar();
                        
                    } catch(Exception $erroServico) {
                        // echo '<pre>';
                        //     print_r($e);
                        // echo '</pre>';
                        echo $erroServico->getMessage();
                    }
                ?>
<style>
   .espaco{
       float: left;
       padding-left: 9%;
   }
   .imagens{
       object-fit: cover;
   }
</style>
               
                <br>
              
            <?php foreach ($listaServico as $linhaServico){ ?>
                <div class="espaco">
                    <div class="card" style="width: 18rem; height: 17rem;" id="espaco">
                        <center><img class="imagens" width="150px" height="150px" src=" <?php echo 'restrito/'.$linhaServico['fotoservico'] ?> "></center>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $linhaServico['descservico'] ?></h5>
                            <h5 class="card-title"><?php echo $linhaServico['textoservico'] ?></h5>
                        </div>
                    </div>
                    <br>
                </div> 
                <?php  } ?>
                
               
                <br>

                <!--
                <table class="table">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Texto</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody id='resultado'>
                        <?// foreach ($listaServico as $linhaServico){ ?>
                            <tr>
                                <td><?// echo $linhaServico['descservico'] ?></td>
                                <td><?// echo $linhaServico['textoservico'] ?></td>
                                <td><img width="50px"  src=" <?// echo 'restrito/'.$linhaServico['fotoservico'] ?> "></td>
                            </tr>
                        <?// } ?>
                    </tbody>
                </table>
    
    
-->    
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>

<center>
    <div class="footer">
<footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: white;">Copyright &copy; Ellpa Barbearia 2020</span>
                    </div>
                </div>
                </footer>
</div>

        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
