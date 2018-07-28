<?php

function listaMedicos($conexao){
    $produtos = array();
  
    $resultado = mysqli_query($conexao, "select m.crm as crm, m.nome as medico, e.nome as especialidade from medicos as m join especialidade as e on m.especialidade = e.id");
   while($produto = mysqli_fetch_assoc($resultado)){
       array_push($produtos, $produto);  
    } 
    return $produtos;
}

