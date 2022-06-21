<?php

require_once('conexao.php');

$email=$_POST ['email'];
$senha=$_POST ['senha'];

$sql_login = mysqli_query ($conectar, "SELECT * FROM usuarios WHERE email ='$email' AND senha='$senha' ");

if(mysqli_num_rows($sql_login)!=0){
    header('location:usuario.php');

}else{
    print " <script>
 
    alert('Login invalido! ');
    window.location.href='login.html';
    
    </script> ";
}

    

?>

