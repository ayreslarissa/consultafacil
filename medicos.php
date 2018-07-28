<?php include("conn.php")?>
<?php include("medicos_dao.php")?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consulta Fácil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
      
        <a class="navbar-brand" href="#">Consulta Fácil</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        
      

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exames.php">Exames </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Medicos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agendamentos.html">Meus Agendamentos</a>
        </li>
      </ul>
    </div>

    <a class="btn btn-primary" href="login-index.html">Entrar</a>


    </nav>

    <!-- Masthead -->
    <header class="header-2 d-flex flex-column flex-md-row align-items-md-center p-5">
      <div class="pt-md-3 pb-md-4">
        <h1 class="bd-title mt-0">Medicos</h1>
        <p class="lead">Veja os medicos que atendem em nossa unidade</p>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="body-2 bg-light text-center">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">CRM</th>
                <th scope="col">Nome</th>
                <th scope="col">Especialidade</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $medicos = listaMedicos($conn);
              foreach ($medicos as $medico):
              ?>
              <tr>
                <td><?= $medico['crm'] ?></td>
                <td><?= $medico['medico']?></td>
                <td><?= $medico['especialidade']?></td>  
         
                <td><button type="button" class="btn btn-primary">Marcar Consulta</button></td>
           
                
              </tr>
              <?php 
              endforeach
              ?>
            </tbody>
          </table>
        </div>
      </div>
      

    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Consulta Fácil 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
