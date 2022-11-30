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
            <form method="GET">
                <br>
                <label>Numero Apartamento:</label><input type="text" name="numero" id="numero" ><br><br>
                <label>Area Apartamento: </label><input type="text" name="area" id="area" ><br><br>
                <label>Codigo Edificio: </label><input type="text" name="codigoedificio" id="codigoedificio"><br><br>
                <label>Codigo Morador: </label><input type="text" name="codigomorador" id="codigomorador"><br><br>
                <label>Valor: </label><input type="text" name="valor" id="valor"><br><br>
                <input type="submit" value="pesquisar" name="pesquisar" id="pesquisar"><br><br>
            </form>
        </div>

        <div id="select">
            <?php
            

                if(isset($_GET['pesquisar'])){
                
                    $numeroapto = $_GET['numero'];
                    $areaapto = $_GET['area'];
                    $codigoedif = $_GET['codigoedificio'];
                    

                    $query = "SELECT `numero_apto`, `area_apto`, `codigo_edificio`, `codigo_morador`, `valor` FROM `apartamento` WHERE numero_apto = $numeroapto";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array( $result ))
                    {     
                                
                        $numeroapto = $row[0];
                        $areaapto = $row[1];
                        $codigoedif = $row[2];
                        $codmor = $row[3];
                        $valor =  $row[4];
                            
                    }
           
                    
                   
                    
                }
             
            ?>
        </div>

    </main>
</body>
</html>