<?php
 
    require_once('conexao.php');
 
    $id = $_POST['codigo'];
 
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
     
 
    $sql_atualizar=mysqli_query($conectar, "UPDATE usuarios SET email='$email', nome='$nome',
     senha='$senha' WHERE id='$id' ");
 
 
    if($sql_atualizar==true){
 
        echo " <script>
 
        alert('Usuario atualizado com sucesso');
        window.location.href='usuario.php';
        
        </script> ";
 
    }
    else{
 
        echo " <script>
 
        alert('Falha na edição');
        window.location.href='editar.php';
        
        </script> ";
 
    }



 
?>
