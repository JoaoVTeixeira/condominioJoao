<?php 
    include('conexao.php');
    include('metodos.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>
        P10 - HOME
    </title>
</head>
<body>
   
   <header>
       
         <div id="logo">
            <img id="logoImg" src="images/logo.jpg">
            <h1 id="tituloLogo">P-10 MOBILE</h1>
        </div>
        <div id="menu">
            <ul class="listaMenu">                
                <li><a id="menuAtual" href="index.html">Home</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
                <li><a href="sobre.html">Sobre Nós</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </div>
    </header>

    <main id="content">

        <div id="formulario">
            <form method="post">
                <br>
                <label>Numero Apartamento:</label><input type="text" name="numero" id="numero" required><br><br>
                <label>Area Apartamento: </label><input type="text" name="area" id="area" required><br><br>
                <label>Codigo Edificio: </label><input type="text" name="codigoedificio" id="codigoedificio" required><br><br>
                <label>Codigo Morador: </label><input type="text" name="codigomorador" id="codigomorador" required><br><br>
                <label>Valor: </label><input type="text" name="valor" id="valor" required><br><br>
                <input type="submit" value="Cadastrar" name="Cadastrar" id="Cadastrar"><br><br>
                

            </form>

            <form method="GET" action="selectApartamento.php">
            <input type="submit" value="Pesquisar" name="Pesquisar" id="Pesquisar"><br><br>
        
            </form>
        </div>

        <div id="select">
            <?php
            
                selectApto();
                if(isset($_POST['Cadastrar'])){

                $numero = $_POST['numero'];
                $area = $_POST['area'];
                $codigoedificio = $_POST['codigoedificio'];
                $codigomorador = $_POST['codigomorador'];
                $valor = $_POST['valor'];

                insertApto($numero,$area,$codigoedificio,$codigomorador,$valor);



                }


                        
            ?>
        </div>




    </main>

</body>
</html>