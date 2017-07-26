<?php
session_start();
require_once (__DIR__.'/../Modelo/Actas.php');

class ActasController
{
    static function main($action){
        if ($action == "crear"){
            SecretariaController::crear();
        }
    }

    static public function crear(){
        try{
           /* $h1=$_POST['Hora'];
            $h2= $_POST['Hora1'];
            $h3 = $_POST['Hora2'];
            $pe = $_POST['Periodo'];
            $Hora = $h1.$h2.$h3.$pe;*/

            $arrayActas = array();
            $arrayActas['Fecha'] = $_POST['Fecha'];
            $arrayActas['Hora'] = $_POST['Hora'];
            $arrayActas['Lugar_Reunion'] = $_POST['Lugar_Reunion'];
            $arrayActas['Puntos_Tratados'] = $_POST['Puntos_Tratados'];
            $arrayActas['Acuerdos_Tomados'] = $_POST['Acuerdos_Tomados'];
            $arrayActas['Observaciones']= $_POST['Observaciones'];
            $arrayActas['idPersona'] = $_POST['idPersona'];
            $Actas = new Actas($arrayActas);
            $Actas->insertar();
            //header("Location: ../Vista/CreateActas.php?respuesta=correcto");
        }catch (Exception $w){
            //header("Location: ../Vista/CreateActas.php?respuesta=error");

        }
    }

}