<?php
$conexao= mysqli_connect('localhost', 'root', '','locais');

if($conexao->connect_error){
    die("flha ao conectar ao banco de dados". $conexao->connect_error);

}


?>