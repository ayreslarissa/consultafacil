<?php

function listaExames($conexao){
    $produtos = array();
  
    $resultado = mysqli_query($conexao, "select p.*, e.nome as exame, e.valor, ep.nome as especialidade  from medicos as p join exames as e on e.id_medico = p.id JOIN especialidade as ep ON ep.id = e.id_especialidade");
   while($produto = mysqli_fetch_assoc($resultado)){
       array_push($produtos, $produto);  
    } 
    return $produtos;
}

