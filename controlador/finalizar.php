<?php
    include ("../modelo/conexion.php");
    $idRegistro=$_POST['idRegistro'];
    date_default_timezone_set("America/Mexico_City");
    $date = date('Y/m/d h:i:s', time());
    $sql=$enlace->query("update registro_vehiculos set horaSal='$date', estatus='finalizado' where idRegistro='$idRegistro';");
    if($sql==true){
        $sql=$enlace->query("select horaEnt,horaSal,tipoVehiculo from registro_vehiculos where idRegistro='$idRegistro';");
        while($row=$sql->fetch_assoc()){
            $horaEnt=$row['horaEnt'];
            $horasE=substr($horaEnt,-8,2);
            $minE=substr($horaEnt,-5,2);
            $horaSal=$row['horaSal'];
            $horasS=substr($horaSal,-8,2);
            $minS=substr($horaSal,-5,2);
            $horasT=(intval($horasS)-intval($horasE))*60;
            echo($horasT);
            $minutosT=(intval($minS)-intval($minE));
            echo($minutosT);
            $tiempoTotal=$horasT+$minutosT;
            echo($tiempoTotal);
            $tipoVehiculo=$row['tipoVehiculo'];
        }
        if($tipoVehiculo=="Residente"){
            $cantidad=$tiempoTotal;
            $sql=$enlace->query("update registro_vehiculos set tiempoEstacionado=$tiempoTotal,cantidad=$cantidad where idRegistro=$idRegistro;");
            echo "<script>alert('Su total es de: $cantidad MX');document.location.href='../vistaFinalizados.php'</script>";
        }else if($tipoVehiculo=="Oficial"){
            $cantidad=0;
            $sql=$enlace->query("update registro_vehiculos set tiempoEstacionado=$tiempoTotal,cantidad=$cantidad where idRegistro=$idRegistro;");
            echo "<script>alert('Su total es de: $cantidad pesos MX');document.location.href='../vistaFinalizados.php'</script>";
        }else if($tipoVehiculo=="No Residente"){
            $cantidad=$tiempoTotal*3;
            $sql=$enlace->query("update registro_vehiculos set tiempoEstacionado=$tiempoTotal,cantidad=$cantidad where idRegistro=$idRegistro;");
            echo "<script>alert('Su total es de: $cantidad pesos MX');document.location.href='../vistaFinalizados.php'</script>";
        }
    }else{
        echo "<script>alert('A ocurrido un error al finalizar el tiempo por favor intentelo de nuevo');document.location.href='../vistaFinalizados.php'</script>";
    }
?>