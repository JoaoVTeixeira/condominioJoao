<?php

include("conexao.php");
include("metodos.php");

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$datavistoria = $_POST['datavistoria'];
$dataconstrucao = $_POST['dataconstrucao'];

insertEdificio($nome, $cep,$numero,$dataconstrucao,$datavistoria,$complemento);


?>