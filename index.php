<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Accesos </title>
    <script src="js/jquery.min.js"></script><!--AJAX-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--BootStrap-->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h3>Registro de acceso de vehículos</h3>
    <form action="controlador/registro.php" method="POST">
        <label for="" class="form-label">No. de placa</label>
        <input type="text" placeholder="Ingrese No. de placa" name="noPlaca" id="noPlaca" class="form-control" required maxlength="8" minlength="7">
        <label for="" class="form-label">Tipo de vehículo</label>
        <select name="tipoVehiculo" id="tipoVehiculo" class="form-select" required>
            <option value="" disabled selected>Seleccione un tipo</option>
            <option value="Residente">Residente</option>
            <option value="No Residente">No Residente</option>
            <option value="Oficial">Oficial</option>
        </select>
        <br>
        <center>
            <input type="submit" class="btn btn-primary" value="Registrar entrada">
        </center>
    </form>
    <h4><a href="vistaVehiculos.php">Vehiculos Activos</a></h4><br>
    <h4><a href="vistaFinalizados.php">Vehículos Finalizados</a></h4><br>
    <h4><a href="vistaReportes.php">Reportes</a></h4><br>
    
</body>

</html>