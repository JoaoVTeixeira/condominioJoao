<?php

$numeroapto = $_GET['numero'];
                    $areaapto = $_GET['area'];
                    $codigoedif = $_GET['codigoedificio'];
                    

                    $query = "SELECT `numero_apto`, `area_apto`, `codigo_edificio`, `codigo_morador`, `valor` FROM `apartamento` WHERE numero_apto = $numeroapto";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array( $result ))
                    {     
                                
                        $numero = $row[0];
                        $area = $row[1];
                        $coded = $row[2];
                        $codmor = $row[3];
                        $valor =  $row[4];
                            
                    }
           
                    
                    $_GET['numero'] = $numero;
                    $_GET['area'] = $area;
                    $_GET['codigoedificio'] = $coded;
                    $_GET['codigomorador'] = $codmor;
                    $_GET['valor'] =  $valor;

?>