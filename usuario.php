<?php
 
    include_once('conexao.php');
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
 
    <title>Usuarios</title>
  </head>
  <body>
    <div class="container">
    <table rules="all" class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>E-MAIL</th>
          <th>NOME</th>          
          <th>AÇÕES</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        $sql_consulta=mysqli_query($conectar, "SELECT * FROM usuarios");
 
        while($dados=mysqli_fetch_array($sql_consulta)){
            ?>
 
            <tr>
            <td> <?= $dados[0] ?> </td>
            <td> <?= $dados[1] ?> </td>
            <td> <?= $dados[2] ?> </td>            
            <td>
              <a href="editar.php?codigo=<?=$dados[0] ?>"> <button class="btn btn-success">Editar</button></a>
              <a href="excluir.php?codigo=<?=$dados[0] ?>"><button class="btn btn-danger">Excluir</button></a>
            </td>
            </tr>
            
            
        <?php } ?>
      </tbody>
 
    </table>
    <a href="cadastro.html"><button class="btn btn-secondary btn-block">voltar</button></a>
  </div>
  
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>