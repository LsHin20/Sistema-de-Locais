<?php include("conexao.php");
$nome = $_POST['nome'];
$cep   = $_POST['cep'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$data_ = $_POST['data_'];
$logradouro = $_POST['logradouro'];

$sql = "INSERT INTO locais(nome, cep, complemento, numero, bairro, uf, cidade, data_, logradouro) VALUES";
$sql  .= "('$nome', '$cep', '$complemento', '$numero', '$bairro', '$uf', '$cidade', '$data_', '$logradouro')";

if($conexao->query($sql)==TRUE){
    echo " local incluído com sucesso!";
}else{
    echo "erro:" .$sql. "</br>" . $conexao->error;
}

//busca por cpf


?>
<a href="index.php"><button>Voltar ao Inicio</button></a>


        