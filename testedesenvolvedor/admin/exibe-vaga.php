<?php

require('core/database/db_connection.php');

$idVaga = $_GET['idVaga'];

//Query de busca de todas as vagas
$queryVagas = 'SELECT * FROM vagas WHERE id_vaga = "' . $idVaga . '";';

//Executa a query e armazena a resposta na variável $vagas
$obtemDados = mysqli_query($conn, $queryVagas);
$vaga = mysqli_fetch_assoc($obtemDados);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nova Vaga</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <a href="lista-vagas.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome da Vaga</th>
                    <th scope="col">Descrição da Vaga</th>
                    <th scope="col">Salário da Vaga</th>
                    <th scope="col">Contratante da Vaga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $vaga['nome_vaga'] ?></th>
                    <td><?= $vaga['descricao_vaga'] ?></td>
                    <td><?= $vaga['salario_vaga'] ?></td>
                    <td><?= $vaga['contratante_vaga'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>