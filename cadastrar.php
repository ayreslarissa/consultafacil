<?php
$conn = mysqli_connect('localhost', 'root', '','consultafacil_db');

if (!$conn){
	die("Falha na conexão: ". mysqli_connect_error());
}

else {
}

/********* CADASTRAR USUARIO *********/
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$plano = $_POST['plano'];
$ncartao = $_POST['cartao'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['tel'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO pacientes (nome, sexo, cpf, plano, num_cartao, nascimento, numero, email, senha) VALUES";
$sql .= "('$nome', '$sexo', '$cpf','$plano','$ncartao','$nascimento', '$telefone','$email', '$senha')";

if (mysqli_query($conn, $sql)) {
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

 /*************************************************************************************************************/

?>