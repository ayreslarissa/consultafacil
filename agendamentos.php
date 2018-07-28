<?php include("conn.php")?>
<?php include("agendamento_dao.php")?>
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
     
        
      

    <section class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exames.php">Exames </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="medicos.php">Medicos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Meus Agendamentos<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </section>

    <a class="btn btn-primary" href="login-index.html">Entrar</a>


    </nav>

    <!-- Masthead -->
    <header class="header-2 d-flex flex-column flex-md-row align-items-md-center p-5">
      <section class="pt-md-3 pb-md-4">
        <h3 class="display-5">Meus Agendamentos</h3>
        <p class="lead">Veja todos os seu agendamentos marcados</p>
      </section>
    </header>

    <!-- Icons Grid -->
    <section class="body-2 bg-light text-center">
      
      <article class="row justify-content-center">
        <div class="col-sm-8">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Cod.</th>
                <th scope="col">Data</th>
                <th scope="col">Medico</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              $consultas = listaAgendamentos($conn);
              foreach ($consultas as $consulta):
              ?>
              <tr>
                <td><?= $consulta['cod'] ?></td>
                <td><?= $consulta['data']?></td>
                <td><?= $consulta['medico']?></td>             
                
              </tr>
              <?php 
              endforeach
              ?>
            </tbody>
          </table>
        </div>
      </article>

    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <section class="container">
        <article class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; Consulta Fácil 2018. All Rights Reserved.</p>
          </div>
        </article>
    </section>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
