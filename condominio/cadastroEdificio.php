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
                <label>Nome: </label><input type="text" name="nome" id="nome" required><br><br>
                <label>CEP: </label><input type="text" name="cep" id="cep" required><br><br>
                <label>Numero: </label><input type="text" name="numero" id="numero" required><br><br>
                <label>Complemento: </label><input type="text" name="complemento" id="complemento" required><br><br>
                <label>Data Construçao: </label><input type="text" name="dataconstrucao" id="dataconstrucao"><br><br>
                <label>Data Vistoria: </label><input type="text" name="datavistoria" id="datavistoria"><br><br>
                <input type="submit" value="Cadastrar" name="Cadastrar" id="Cadastrar"><br><br>
            </form>
        </div>

        <div id="selectEdif">
            <?php

                selectEdificio();

                if(isset($_POST['Cadastrar'])){
                    $nome = $_POST['nome'];
                    $cep = $_POST['cep'];
                    $numero = $_POST['numero'];
                    $complemento = $_POST['complemento'];
                    $datavistoria = $_POST['datavistoria'];
                    $dataconstrucao = $_POST['dataconstrucao'];

                    insertEdificio($nome, $cep,$numero,$dataconstrucao,$datavistoria,$complemento);
                }

            ?>
        </div>




    </main>

</body>
</html>