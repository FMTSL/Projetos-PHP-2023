<?php

//conexão com o banco
require('core/database/db_connection.php');

$nomeVaga = $_POST['nome'];
$descritorVaga = $_POST['descritor'];
$salarioVaga = $_POST['salario'];
$tipoVaga = $_POST['tipo'];
$contratanteVaga = $_POST['contratante'];


//query de inserção
$query = 'INSERT INTO vagas (`nome_vaga`, `descricao_vaga`, `salario_vaga`, `contratante_vaga`, `tipo_vaga`, `status_vaga`) VALUES ("'.$nomeVaga. '","' . $descritorVaga . '","' . $salarioVaga . '","' . $contratanteVaga . '","' . $tipoVaga . '","ABERTA")';

//echo $query;

//executa a query
$salvaVaga = mysqli_query($conn, $query);

if ($salvaVaga) {
    header('Location: lista-vagas.php');
}