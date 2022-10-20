<?php
    require_once('../models/conexion.php');
    require_once('../models/modeloRegistrar.php');
    require_once('../models/modeloConsultar.php');
    

    $opc = $_GET['opc'];
    switch($opc){
        case 1: $objBD = new MYSQLBD();
                $conBD = $objBD->connectBD();

                $nombreUsuario = $_POST['txtNombreUsuario'];
                $email = $_POST['txtEmailUsuario'];
                $estado = $_POST['txtEestado'];
                $nombreSitio = $_POST['txtLugar'];
                $comentario = $_POST['txtComentario'];

                $objUser = new MODELOREGISTROSITIO($nombreUsuario,$email,$estado,$nombreSitio,$comentario);
                $objUser->INSERTARSITIO($conBD);
                
                break;

         case 2:$objBD = new MYSQLBD();
                $conBD = $objBD->connectBD();

                $objUser = new MODELOCONSULTARCOMENTARIO;
                $comentarios = $objUser->CONSULTARCOMENTARIO($conBD);
                echo '<br><br><br><h3>Comentarios:</h3>';
                echo '<table>
                        <thead>
                            <tr>
                                <th scope="col">Usuario:</th>
                                <th scope="col">Estado que visitó:</th>
                                <th scope="col">Nombre del sitio arquitectonico:</th>
                                <th scope="col">Comentario:</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            ';
                while($rows=mysqli_fetch_assoc($comentarios)){
                    echo '<tr>';
                    echo '<td>' . $rows['nombreUsuario'] . " </td> ";
                    echo '<td>' .$rows['estado'] . " ";
                    echo '<td>' .$rows['nombreSitio'] . " </td> ";
                    echo '<td>' .$rows['comentario'] . " </td> ";
                    echo '</tr>';
                    echo '<br>';
                }
                echo '</tbody></table>';
    }
?>