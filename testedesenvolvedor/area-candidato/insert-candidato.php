<?php

//conecta com o banco
require ('core/database/db_connection.php');

//recebendo nome do candidato
$nomeCandidato = $_GET['nomeCandidato'];
//echo $nomeCandidato ."<br>";
$formacaoCandidato = $_GET['formacaoCandidato'];
//echo $formacaoCandidato ."<br>";
$experienciaCandidato = $_GET ['experienciaCandidato'];
//echo $experienciaCandidato . "<br>";
$competenciasCandidato = $_GET ['competenciasCandidato'];
//echo $competenciasCandidato . "<br>";
$statusCandidato = $_GET ['statusCandidato'];


//Query de inserção
$query = 'INSERT INTO candidatos (nome_candidato, formacao_candidato, experiencia_candidato,competencias_candidato, status_candidato) VALUES ("'.$nomeCandidato.'", "'.$formacaoCandidato.'", "'.$experienciaCandidato.'", "'.$competenciasCandidato.'", "'.$statusCandidato.'")';


//executa a query
$inserindo = mysqli_query($conn, $query);

//Envia para a tela de listagem
if ($inserindo) {
  header('Location: lista-vagas.php');
}
