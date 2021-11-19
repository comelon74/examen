<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Vehiculos</title>
    <script src="js/jquery.min.js"></script><!--AJAX-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--BootStrap-->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h5><a href="index.php">Regresar al inicio</a></h5><br>
<h4>Vehiculos Activos</h4>
    <?php
    include "modelo/conexion.php";
    $sql = $enlace->query("select idRegistro,noPlaca,tipoVehiculo,horaEnt from registro_vehiculos where estatus='activo'");
    if ($sql->num_rows > 0) {
    ?>
        <table class="table table-stripped">
            <tr>
                <th>No. de placa</th>
                <th>Tipo</th>
                <th>Hora de entrada</th>
                <th></th>
            </tr>
            <?php

            while ($row = $sql->fetch_assoc()) {
                $idRegistro = $row["idRegistro"];
                $noPlaca = $row["noPlaca"];
                $tipoVehiculo = $row["tipoVehiculo"];
                $horaEnt = $row["horaEnt"];
            ?>
                <tr>
                    <form action="controlador/finalizar.php" method="POST">
                        <td style="display:none;"> <input type="text" value="<?php echo ($idRegistro) ?>" id="idRegistro" name="idRegistro"></td>
                        <td><input type="text" class="form-control" name="noPlaca" id="noPlaca" value="<?php echo ($noPlaca) ?>" disabled></td>
                        <td><input type="text" class="form-control" name="tipoVehiculo" id="tipoVehiculo" value="<?php echo ($tipoVehiculo) ?>" disabled></td>
                        <td><input type="text" class="form-control" name="horaEnt" id="horaEnt" value="<?php echo ($horaEnt) ?>" disabled></td>
                        <td><input type="submit" class="btn btn-danger" name="finalizar" id="finalizar" value="finalizar"></td>
                    </form>
                </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo ("No hay registros");
    } ?>
</body>
</html>