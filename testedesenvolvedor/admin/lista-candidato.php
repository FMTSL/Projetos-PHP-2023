<?php

//conecta com o banco
require ('core/database/db_connection.php');

$idCandidato = $_GET['idCandidato'];
//echo $idFuncionario;

$query = 'SELECT * FROM candidatos WHERE id_candidato= "'.$idCandidato.'"';
//echo $query;


$select = mysqli_query($conn, $query);

$dados = mysqli_fetch_assoc($select);

echo $dados['nome_candidato']. '<br>' . $dados["formacao_candidato"]. '<br>' . $dados['experiencia_candidato']. '<br>' .  $dados['competencias_candidato']. '<br>' . $dados['status_candidato'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Novo Candidato</title>
</head>

<body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>