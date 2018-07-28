<?php include("conn.php")?>
<?php include("medicos_dao.php")?>
<!DOCTYPE html>
<html lang="pt">


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nova Consulta</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">

</head>

<body>
	
	<header class="masthead text-white text-center">
      <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Agendar Consulta</h1>
                </div>
            </div>
        </div>
    </header>
	
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="criarconsulta.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">
                 
                    <div class="form-row">
                        <label>
                            <span>Paciente</span>
                            <input type="text" name="paciente">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Medico</span>
                            <select name="medico">
                                <?php
                                  $medicos = listaMedicos($conn);
                                  foreach ($medicos as $medico):

                                     echo "<option value='".$medico['id']."'>".$medico['medico']."</option>";

                                   endforeach
                                    ?>
                            </select>
                        </label>
                    </div>

                      <div class="form-row">
                        <label>
                            <span>Data</span>                            
                           <input type="datetime-local" name="data">
                        </label>
                    </div>
                    <div class="form-row">
                        <button type="submit" name="submit">Cadastrar</button>
                    </div>

                </div>

               

            </div>

           
        </form>

    </div>

</body>

</html>