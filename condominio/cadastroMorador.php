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
                <label>CPF: </label><input type="text" name="cpf" id="cpf" required><br><br>
                <label>Sexo: </label><input type="text" name="sexo" id="sexo" required><br><br>
                <label>CEP: </label><input type="text" name="cep" id="cep" required><br><br>
                <label>Data de Nascimento: </label><input type="text" name="datanascimento" id="datanascimento"><br><br>
                <input type="submit" value="Cadastrar" name="Cadastrar" id="Cadastrar"><br><br>
            </form>
        </div>

        <div id="select">
            <?php
            
                selectMorador();
                        
                if(isset($_POST['Cadastrar'])){

                    
                    $nome = $_POST['nome'];
                    $cep = $_POST['cep'];
                    $cpf = $_POST['cpf'];
                    $sexo = $_POST['sexo'];
                    $data_de_nascimento = $_POST['datanascimento'];

                    insertMorador($cpf,$nome,$sexo,$data_de_nascimento,$cep);



                }

            ?>
        </div>




    </main>

</body>
</html>