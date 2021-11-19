<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reportes</title>
    <script src="js/jquery.min.js"></script><!--AJAX-->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!--BootStrap-->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h5><a href="index.php">Regresar al inicio</a></h5><br>
<h4>Generar Reportes</h4>
    <?php date_default_timezone_set("America/Mexico_City"); ?>
    <form action="controlador/reporteExcelyPDF.php" method="POST">
        <label for="" class="form-label">Fecha inicial</label>
        <input type="date" class="form-control" id="fechaInicial" name="fechaInicial" required>
        <label for="" class="form-label">Hora inicial</label>
        <input type="time" class="form-control" id="horaInicial" name="horaInicial" required>
        <label for="" class="form-label">Fecha final</label>
        <input type="date" class="form-control" id="fechaFinal" name="fechaFinal" required>
        <label for="" class="form-label">Hora final</label>
        <input type="time" class="form-control" id="horaFinal" name="horaFinal" required><br>
        <center>
            <input type="submit" class="btn btn-secondary" id="excel" name="excel" value="Generar Excel">
            <input type="submit" id="pdf" class="btn btn-primary" name="pdf" value="Generar PDF">
        </center>
    </form>
</body>
</html>