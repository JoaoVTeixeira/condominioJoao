<?php

include("conexao.php");
include("metodos.php");


$nome = $_POST['nome'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$complemento = $_POST['sexo'];
$datavistoria = $_POST['datanascimento'];

insertMorador($cpf,$nome,$sexo,$data_de_nascimento,$cep);

?>