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
  header('Location: lista-candidato.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>