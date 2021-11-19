<?php
include("../modelo/conexion.php");
$fechaInicial = $_POST['fechaInicial'];
$horaInicial = $_POST['horaInicial'];
$fechaFinal = $_POST['fechaFinal'];
$horaFinal = $_POST['horaFinal'];
$horaEnt = $fechaInicial . ' ' . date("g:i:s ", strtotime($horaInicial));
$horaSal = $fechaFinal . '  ' . date("g:i:s ", strtotime($horaFinal));
$sql = $enlace->query("select * from registro_vehiculos where horaEnt>='$horaEnt' and horaSal<='$horaSal';");
if (isset($_POST['excel'])) {
    echo ("Rango de fechas de: " . $horaEnt . ' a ' . $horaSal);
    header("Content-Type: application/vnc.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=datos-usuarios.xls");
?>
    <?php
    if ($sql->num_rows > 0) {
        ?>
        <table border="1">
            <tr>
                <th>No. de placa</th>
                <th>Tipo</th>
                <th>Tiempo Estacionado</th>
                <th>Cantidad</th>
            </tr>
            <?php
            while ($row = $sql->fetch_assoc()) {
                $noPlaca = $row["noPlaca"];
                $tipoVehiculo = $row["tipoVehiculo"];
                $tiempoEstacionado = $row["tiempoEstacionado"];
                $cantidad = $row["cantidad"];
                ?>
                <tr>
                    <td><?php echo ($noPlaca) ?></td>
                    <td><?php echo ($tipoVehiculo) ?></td>
                    <td><?php echo ($tiempoEstacionado . ' Minutos') ?></td>
                    <td><?php echo ($cantidad . ' pesos MX') ?></td>
                </tr>
                <?php } ?>
            </table>
<?php
    } else {
        echo ("No hay registros");
    }
} else if(isset($_POST['pdf'])){
    require ('../fpdf/fpdf.php');
    if ($sql->num_rows > 0) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(200,20,'Rango de fechas de: '.$horaEnt.' a '.$horaSal.'',0,1,'L');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,"No. de placas",1,0,'C');
        $pdf->Cell(45,10,"Tipo de vehiculo",1,0,'C');
        $pdf->Cell(55,10,"Tiempo estacionado",1,0,'C');
        $pdf->Cell(40,10,"Cantidad",1,1,'C');
        while ($row = $sql->fetch_assoc()) {
            $noPlaca = $row["noPlaca"];
            $tipoVehiculo = $row["tipoVehiculo"];
            $tiempoEstacionado = $row["tiempoEstacionado"];
            $cantidad = $row["cantidad"];
            $pdf->Cell(40,10,$noPlaca,1,0,'C');
            $pdf->Cell(45,10,$tipoVehiculo,1,0,'C');
            $pdf->Cell(55,10,$tiempoEstacionado.' minutos',1,0,'C');
            $pdf->Cell(40,10,$cantidad.' pesos MX',1,1,'C');
        }
        $pdf->Output();
    }else{
    
    }
    }
?>