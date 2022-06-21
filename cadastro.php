<?php

require_once ('conexao.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql_cadastro = mysqli_query($conectar, "INSERT INTO usuarios (email, nome, senha) VALUES ('$email', '$nome', '$senha')" );

if($sql_cadastro == true){
    print " <script>
 
        alert('Usuario cadastrado com sucesso');
        window.location.href='usuario.php';
        
        </script> ";

}else{
    print " <script>
 
    alert('Usuario não cadastrado');
    window.location.href='cadastro.php';
    
    </script> ";}



?>