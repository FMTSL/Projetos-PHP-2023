<?php

require('core/database/db_connection.php');

//Query de busca de todas as vagas
$queryVagas = 'SELECT * FROM vagas;';

//Executa a query e armazena a resposta na variável $vagas
$vagas = mysqli_query($conn, $queryVagas);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nova Vaga</title>
</head>

<body>
    <div class="container mt-5">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome da Vaga</th>
                    <th scope="col">Descrição da Vaga</th>
                    <th scope="col">Salário da Vaga</th>
                    <th scope="col">Contratante da Vaga</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($vaga = mysqli_fetch_assoc($vagas)) { ?>
                    <tr>
                        <th scope="row"><a href="exibe-vaga.php?idVaga=<?= $vaga['id_vaga'] ?>"><?= $vaga['nome_vaga'] ?></a></th>
                        <td><?= $vaga['descricao_vaga'] ?></td>
                        <td><?= $vaga['salario_vaga'] ?></td>
                        <td><?= $vaga['contratante_vaga'] ?></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="inscrever-vaga.php?idVaga=<?= $vaga['id_vaga'] ?>&idUsuario=" href="">Inscrever Vaga</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>