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
           <div class="container mt-5">
                <form method="GET" action="insert-candidato.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome do Candidato</label>
                    <input type="text" class="form-control" name="nomeCandidato" aria-describedby="emailHelp">
                </div>
                
            <!-- 
                        
                       
                       
                       
                     
                -->
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Formação Candidato</label>
                    <textarea class="form-control" name="formacaoCandidato" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Experiência Candidato</label>
                    <textarea class="form-control" name="experienciaCandidato" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Competencias Candidato</label>
                    <textarea class="form-control" name="competenciasCandidato" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <select class="form-select"  name="statusCandidato" aria-label="Default select example">
                <option selected>Status Candidato</option>
                <option value="1">Inscrito</option>
                <option value="2">Procurando</option>
                <option value="3">Inativo</option>
                </select>

                
                
                <button type="submit" class="btn btn-primary">Cadastrar Candidato</button>
                </form>

           </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>