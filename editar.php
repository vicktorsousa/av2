<?php
 
    include_once('conexao.php');
 
    $id = $_GET['codigo'];
 
    $sql_consulta = mysqli_query($conectar, "SELECT *FROM usuarios WHERE id='$id'");
 
    $dados=mysqli_fetch_array($sql_consulta);


 
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Editar</title>
  </head>
  <body>
    <div class="container-pai">
        <div class="container">
            <form method="POST" action="atualizar.php" class="form-signin">
              <input type="hidden" name="codigo"  value="<?=$dados[0] ?>">
                <input type="email" name="email" value="<?=$dados[1] ?>" id="inputEmail" class="form-control" placeholder="Email ou número de celular" required autofocus>
                <input type="text" name="nome" value="<?=$dados[2] ?>" class="form-control" placeholder="Nome completo" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" value="<?=$dados[3] ?>" id="inputPassword" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-secondary btn-block" type="submit">Cadastre-se</button>
            </form>            
        </div>
    </div>
 
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>