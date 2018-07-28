<?php
$conn = mysqli_connect('localhost', 'root', '','consultafacil_db');

if (!$conn){
    die("Falha na conexão: ". mysqli_connect_error());
}

else {
}

/********* CADASTRAR USUARIO *********/
$paciente = $_POST['paciente'];
$medico = $_POST['medico'];
$data = $_POST['data'];

$sql = "INSERT INTO consultas (paciente, medico, data) VALUES";
$sql .= "('$paciente', '$medico', '$data')";

if (mysqli_query($conn, $sql)) {
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

 /*************************************************************************************************************/

?>