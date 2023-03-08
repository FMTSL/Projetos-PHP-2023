<?php

    require('core/database/db_connection.php');


$idVaga = $_GET ['idVaga'];
$idUsuario = $_GET ['idUsuario'];

//QUERY DE BUSCA
$queryVagas = 'INSERT INTO `inscricao`(`idInscricao`, `idUsuario`, `idVaga`) VALUES ("'.$idVaga.'", "'.$idUsuario.'" )';


$vaga = mysqli_query($conn, $queryVagas);

if ($vaga){

    header('Location: lista-vagas');
}