<?php
    include "../modelo/conexion.php";
    $noPlaca=$_POST["noPlaca"];
    $tipoVehiculo=$_POST["tipoVehiculo"];
    date_default_timezone_set("America/Mexico_City");
    $date =date('Y/m/d h:i:s', time());
    $sql=$enlace->query("insert into registro_vehiculos (noPlaca,horaEnt,tipoVehiculo) values('$noPlaca','$date','$tipoVehiculo')");
    if($sql==true){
        echo "<script>alert('Se ha agregado el registro con numero de placa: $noPlaca correctamente');document.location.href='../vistaVehiculos.php'</script>";
    }else{
        echo "<script>alert('Error al agregar el registro con numero de placa: $noPlaca');document.location.href='../index.php'</script>";
    }
?>