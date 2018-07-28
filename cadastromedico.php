<?php 

    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("consultafacil_db",$con);
    $get=mysql_query("SELECT id, nome FROM especialidade ORDER BY id ASC");
    $option = '';
    while($row = mysql_fetch_assoc($get))
    {
        $option .= '<option value = "'.$row['id'].'">'.$row['nome'].'</option>';
    }
?>

<!DOCTYPE html>
<html lang="pt">


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Médicos</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">

</head>

<body>
	
	<header class="masthead text-white text-center">
      <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Área de cadastro de médicos</h1>
                </div>
            </div>
        </div>
    </header>
	
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="cadastrarmedico.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">
                 
                    <div class="form-row">
                        <label>
                            <span>Nome</span>
                            <input type="text" name="nome">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>CRM</span>
                            <input type="text" name="crm">
                        </label>
                    </div>

                      <div class="form-row">
                        <label>
                            <span>Especialidade</span>                            
	                     	<select name="especialidade">
     							 	<?php echo $option; ?>
							</select>
                        </label>
                    </div>

                      <div class="form-row">
                        <label>
                            <span>Nascimento</span>                            
                           <input type="date" name="nascimento">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>CPF</span>

                            <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
                           
                        </label>
                    </div>                  

                    <div class="form-row">
                        <label>
                            <span>Telefone</span>

                            <input type="text" name="tel" maxlength="10">
                           
                        </label>
                    </div>                  

                    <div class="form-row">
                        <label>
                            <span>Email</span>

                            <input type="email" name="email" >
                           
                        </label>
                    </div>   
                    <div class="form-row">
                        <label>
                            <span>Senha</span>

                            <input type="password" name="senha" >
                           
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


<?php header('Location: index.html'); ?>