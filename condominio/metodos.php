<?php
include("conexao.php");





function selectEdificio(){

      include("conexao.php");
      
      $query = "SELECT * FROM edificio"; 
      $result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error() );

      while ($row = mysqli_fetch_array( $result_query ))
      {     
            
            print "<table> <tr> <td> $row[0]  </td>  <td>  $row[1]  </td>  <td>  $row[2]  </td> <td>  $row[3] </td>  <td>  $row[4]  </td> <td> $row[5]  </td> </tr> </table>";
      
      }

      mysqli_close($conn);

}

function selectMorador(){

      include("conexao.php");

      $query = "SELECT * FROM morador"; 
      $result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error() );

      while ($row = mysqli_fetch_array( $result_query ))
      {     
                  
          print "<table> <tr> <td> $row[0]  </td>  <td>  $row[1]  </td>  <td>  $row[2]  </td> <td>  $row[3] </td>  <td>  $row[4]  </td> <td>  $row[5]  </td> </tr> </table>";
              
      }

       mysqli_close($conn);

}

function selectApto(){
  
      include("conexao.php");

      $query = "SELECT * FROM apartamento"; 
      $result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error() );

      while ($row = mysqli_fetch_array( $result_query ))
      {     
                  
          print "<table> <tr> <td> $row[0]  </td>  <td>  $row[1]  </td>  <td>  $row[2]  </td> <td>  $row[3] </td> <td>  $row[4] </td> </tr> </table>";
              
      }

       mysqli_close($conn);
              
}

function insertEdificio($nome, $cep,$numero,$dataconstrucao,$datavistoria,$complemento){

      include("conexao.php");


      if($nome == "" || $nome == null)
      {
      echo "Nome não pode estar vazio!";
      }
      else
      {
      $query = "INSERT INTO `edificio`(`nome`, `cep`, `numero`, `data_construcao`, `data_vistoria`, `complemento`) VALUES ('$nome','$cep','$numero','$dataconstrucao','$datavistoria','$complemento')";
      $insert = mysqli_query($conn,$query);
      if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Edificio cadastrado com sucesso!');window.location.
            href='cadastroedificio.php'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse edificio');window.location
            .href='cadastroedificio.php'</script>";
            }

      }

}

function insertMorador($cpf,$nome,$sexo,$data_de_nascimento,$cep){
      
      include("conexao.php");
      
      if($nome == "" || $nome == null)
      {
      echo "Nome não pode estar vazio!";
      }
      else
      {
      $query = "INSERT INTO `morador`(`cpf`, `nome`, `sexo`, `data_de_nascimento`, `cep`) VALUES ('$cpf','$nome','$sexo','$data_de_nascimento','$cep')";
      $insert = mysqli_query($conn,$query);
      if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Morador cadastrado com sucesso!');window.location.
            href='cadastroMorador.php'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse Morador');window.location
            .href='cadastroMorador.php'</script>";
            }

      }

}

function insertApto($numero,$area,$codigoedificio,$codigomorador,$valor){

      include("conexao.php");
            

      $query = "SELECT codigo_edificio FROM edificio WHERE codigo_edificio = $codigoedificio";
      $result1 = mysqli_query($conn, $query);
      $query = "SELECT codigo_morador FROM morador WHERE codigo_morador = $codigomorador";
      $result2 = mysqli_query($conn, $query);

      if(mysqli_num_rows ($result1) == 0)
      {
            echo "Código Edifício inválido!";
      }
      else if (mysqli_num_rows ($result2) == 0)
      {
            
            echo "Código Morador inválido!";

      }else{

      $query = "INSERT INTO `apartamento`(`numero_apto`, `area_apto`, `codigo_edificio`, `codigo_morador`, `valor`) VALUES ('$numero','$area','$codigoedificio','$codigomorador', '$valor')";
      $insert = mysqli_query($conn,$query);
      if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Apartamento cadastrado com sucesso!');window.location.
            href='cadastroApartamento.php'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse Apartamento');window.location
            .href='cadastroApartamento.php'</script>";
            }
            
      }
}







?>