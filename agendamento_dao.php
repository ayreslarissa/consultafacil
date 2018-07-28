<?php

function listaAgendamentos($conexao){
    $produtos = array();
  
    $resultado = mysqli_query($conexao, "select c.id as cod, m.nome as medico, c.data as data from consultas as c join medicos as m on c.medico = m.id");
   while($produto = mysqli_fetch_assoc($resultado)){
       array_push($produtos, $produto);  
    } 
    return $produtos;
}

