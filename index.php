<DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body class="bg-dark">

    <nav class="navbar navbar-dark bg-Light">
      <a class="navbar-brand" href="#">
        <img src="assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="span-logo">App Help Desk</span>
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              <h4 class="text-uppercase text-center">Login</h4>
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                   ?>
                  <div class="text-danger">Usuário ou senha inválido</div>
                <?php }?>

                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                   ?>
                  <div class="text-danger">Faça o login antes de acessar as páginas protegidas!</div>
                <?php }?>

                
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>