<!DOCTYPE html>
<html>


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Pacientes</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">

</head>

<body>
	
	<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Área de cadastro de pacientes</h1>
        </div>
     </header>
	
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="cadastrar.php">

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
                            <span>Sexo</span>
                                
                              <select name="sexo">
                                <option selected>--</option>
                                <option >Masculino</option>
                                <option >Feminino</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>CPF</span>

                            <input type="text" name="cpf" maxlength="11"  >
                           
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Plano</span>

                            <input type="text" name="plano">
                           
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Número do cartão:</span>

                            <input type="text" name="cartao" maxlength="20"  >
                           
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
                            <span>Telefone</span>                            
                           <input type="tel" name="tel">
                        </label>

                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>                            
                           <input type="email" name="email">
                        </label>

                    </div>
                    <div class="form-row">
                        <label>
                            <span>Senha</span>                            
                           <input type="password" name="senha">
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


