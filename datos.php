<?php
class Datos
{
    function DetalleVuelos(){
        $paisOrigen = "El Salvador";
        $ciudadOrigen = array("San Salvador", "Aguilares","San Ignacio");
        $paisDestino = array("Guatemala", "Costa Rica", "Mexico");
        $aerolinea = "";
        $aeronave = "";
        $fecha_salida = array("20-12-2021");
        $hora_salida = array("9:15 PM");
        $fecha_llegada = array("21-12-2021");
        $hora_llegada = array("10:00 AM");
       
        $pais = isset($_POST['paises']);
        $imprimir = "";
        if($pais == "1"){
            $imprimir = "<b>Pais de Destino:</b> ". $paisDestino[0]."<br>".
            "<b>Fecha y Hora de salida:</b> ". $fecha_salida[0]."\n".$hora_salida[0]."<br>".
            "<b>Fecha y Hora de llegada:</b> ". $fecha_llegada[0]."\n".$hora_llegada[0]."<br>";
        }
        echo $imprimir;
    
    }

    function registrarVuelo(){
        $imprimir = "";
        if(isset($_POST['enviar'])){
            $paisOrigen = $_POST['paisesOrigen'];
            $paisDestino = $_POST['paisesDestino'];
            $fecha_salida = $_POST['salida'];
            $fecha_llegada = $_POST['llegada'];
            
            
            $imprimir .= "<div class='header'>";
            $imprimir = "<h1>VUELO SELECCIONADO</H1>";
            $imprimir .= "</div>";

            $imprimir .= "<div class='registro'>";
                $imprimir .= "<div class='PO'>";
                    $imprimir .= $paisOrigen;
                    $imprimir .= "\t"; #tabulacion
                    $imprimir .= $paisDestino;
                    $imprimir .= "\t"; #tabulacion
                    $imprimir .= $fecha_salida;
                    $imprimir .= "\t"; #tabulacion
                    $imprimir .= $fecha_llegada;
                    $imprimir .= "\t"; #tabulacion
                $imprimir .= "</div>";
            $imprimir .= "</div>";

            echo $imprimir;
        }
        }
    }
?>