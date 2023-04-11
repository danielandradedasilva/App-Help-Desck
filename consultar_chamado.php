<?php require_once "validador_acesso.php"?>

<?php 
  //chamados
  $chamados = array();


  //abrir arquivo.txt
  $arquivo = fopen('arquivo.txt', 'r');

  //percorer o arquivo, enquanto houver registros
  while(!feof($arquivo)) {
    //linhas
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }
  //fechar o arquivo.txt aberto
  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body class="bg-dark">

    <nav class="navbar navbar-dark bg-Light">
      <a class="navbar-brand" href="#">
        <img src="assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="span-logo">App Help Desk</span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  text-danger" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <?php foreach($chamados as $chamado){ ?>

                <?php 
                  $chamado_dados = explode('#', $chamado);

                  if(count($chamado_dados) < 3){
                    continue;
                  }
                ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6>
                  <p class="card-text"><?= $chamado_dados[2]?></p>

                </div>
              </div>
              <? } ?>
            </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>