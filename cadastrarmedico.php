<?php
$conn = mysqli_connect('localhost', 'root', '','consultafacil_db');

if (!$conn){
    die("Falha na conexão: ". mysqli_connect_error());
}

else {
}

/********* CADASTRAR USUARIO *********/
$nome = $_POST['nome'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];

if ($especialidade == "Cardiologia") 
    $id_especialidade = 1;
else if ($especialidade == "Dermatologia")    
    $id_especialidade = 2;    
else if ($especialidade == "Gastroenterologia")
    $id_especialidade = 3;        
else if ($especialidade == "Urologia")
    $id_especialidade = 4;
else $id_especialidade = 0;
$telefone = $_POST['tel'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO medicos (nome, crm, especialidade, nascimento, cpf, id_especialidade, telefone, email, senha) VALUES";
$sql .= "('$nome', '$crm', '$especialidade','$nascimento','$cpf','$id_especialidade', '$telefone','$email', '$senha')";

if (mysqli_query($conn, $sql)) {
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

 /*************************************************************************************************************/

?>