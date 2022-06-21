<?php
 
    include_once('conexao.php');
 
    $id = $_GET['codigo'];
 
    $sql_excluir= mysqli_query($conectar, "DELETE FROM usuarios WHERE id='$id'");
 
    if($sql_excluir==true){
 
        echo " <script>
 
        alert('Usuario excluido');
        window.location.href='usuario.php';
        
        </script> ";
 
    }else{
        
        echo " <script>
 
        alert('Falha ao excluir');
        window.location.href='usuario.php';
        
        </script> ";
    }




 
?>