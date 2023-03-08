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
        <form method="POST" action="insert-vaga.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome da Vaga</label>
                <input type="text" class="form-control" name="nome" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ex.: Auxiliar Administrativo</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descrição da Vaga</label>
                <textarea class="form-control" name="descritor" aria-describedby="emailHelp"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Salário da Vaga</label>
                <input type="text" class="form-control" name="salario" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">R$ 2.600,00</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo da Vaga</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="CLT" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">CLT</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="PESSOA JURIDICA" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">PESSOA JURÍDICA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="FREELANCER" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">FREELANCER</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contratante da Vaga</label>
                <input type="text" class="form-control" name="contratante" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ex.: Empresa XYZ</div>
            </div>
            <button type="submit" class="btn btn-success">Adicionar Vaga</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>