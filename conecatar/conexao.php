<?php
   $servidor = "localhost";
   $usuario = "root";
   $senha = "";
   $dbname ="db_usuario";

   $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
   if(!$conexao){
    die("houve um erro".mysqli_connect_error());
   }

?>