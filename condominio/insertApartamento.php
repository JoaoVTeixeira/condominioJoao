<?php

include("conexao.php");
include("metodos.php");




$numero = $_POST['numero'];
$area = $_POST['area'];
$codigoedificio = $_POST['codigoedificio'];
$codigomorador = $_POST['codigomorador'];

insertApto($numero,$area,$codigoedificio,$codigomorador);

?>