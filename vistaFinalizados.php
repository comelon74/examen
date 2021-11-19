<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h4>Vehículos Finalizados</h4>
    ?>, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery.min.js"></script><!--AJAX-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--BootStrap-->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h5><a href="index.php">Regresar al inicio</a></h5><br>
<h4>Vehículos Finalizados</h4>
    <?php
    include "modelo/conexion.php";
    $sql = $enlace->query("select * from registro_vehiculos where estatus='finalizado'");
    if ($sql->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>No. de placa</th>
                <th>Tipo</th>
                <th>Tiempo Estacionado</th>
                <th>Cantidad</th>

            </tr>
            <?php

            while ($row = $sql->fetch_assoc()) {
                $idRegistro = $row["idRegistro"];
                $noPlaca = $row["noPlaca"];
                $tipoVehiculo = $row["tipoVehiculo"];
                $tiempoEstacionado = $row["tiempoEstacionado"];
                $cantidad = $row["cantidad"];

            ?>
                <tr>
                    <td style="display:none;"> <input type="text" value="<?php echo ($idRegistro) ?>" id="idRegistro" name="idRegistro"></td>
                    <td><input type="text" class="form-control" name="noPlaca" id="noPlaca" value="<?php echo ($noPlaca) ?>" disabled></td>
                    <td><input type="text" class="form-control" name="tipoVehiculo" id="tipoVehiculo" value="<?php echo ($tipoVehiculo) ?>" disabled></td>
                    <td><input type="text" class="form-control" name="tiempoEstacionado" id="tiempoEstacionado" value="<?php echo ($tiempoEstacionado . ' Minutos') ?>" disabled></td>
                    <td><input type="text" class="form-control" name="cantidad" id="cantidad" value="<?php echo ($cantidad . ' pesos MX') ?>" disabled></td>
                </tr>
            <?php } ?>
        </table>
    <?php
    } else {
        echo ("No hay registros");
    }?>
    <br>
    <h4><a href="vistaReportes.php">Generar Reportes</a></h4>
</body>
</html>