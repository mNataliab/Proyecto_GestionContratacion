<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 2:36 PM
 */
class LicitacionController
{
    static function main($action)
    {
        if ($action == "crear") {
            PersonaController::crear();
        } else if ($action == "Login") {
            PersonaController::Login();
        } else if ($action == "CerrarSession") {
            PersonaController::CerrarSession();
        }

    }


    static public function crear(){
        try{
            $arrayPersona = array();
            $arrayPersona['	Fecha_firma_contrato'] = $_POST ['	Fecha_firma_contrato'];
            $arrayPersona['Ejecucion_Contrato']=$_POST['Ejecucion_Contrato'];
            $arrayPersona['Plazo_Ejecucion_Contrato'] = $_POST[' Plazo_Ejecucion_Contrato'];
            $arrayPersona['Calificacion']=$_POST['Calificacion'];
            $arrayPersona['Estado'] = $_POST['Estado'];
            $arrayPersona['	idPersona'] = $_POST['	idPersona'];
            $arrayPersona['idEmpresas'] = $_POST['idEmpresas'];
            $arrayPersona['idContratos_Publicos'] = $_POST['idContratos_Publicos'];
            $Persona = new Licitacion($arrayPersona);
            $Persona->insertar();
            header("Location: ../Vista/CreateLicitacion.php?respuesta=correcto");



        }catch(Exception $e){
            header("Location: ../Vista/CreateLicitacion.php?respuesta=error");
        }
    }



}



