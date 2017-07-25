<?php

require_once (__DIR__.'/../Modelo/Empresas.php');

if(!empty($_GET['action'])){
    EmpresaController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}

class EmpresaController
{
    static function main($action){
        if ($action == "crear"){
            EmpresaController::crear();
        }
    }
    static public function crear(){
        try{
            $arrayEmpresas = array();
            $arrayEmpresas['Razonsocial_contratista']=$_POST['Razonsocial_contratista'];
            $arrayEmpresas['Identificacion_Contatista'] = $_POST['Identificacion_Contatista'];
            $arrayEmpresas['Pais_Contatrista'] = $_POST['Pais_Contatrista'];
            $arrayEmpresas['Departamento_Contatista'] = $_POST['Departamento_Contatista'];
            $arrayEmpresas['Provincia_Contratista'] = $_POST['Provincia_Contratista'];
            $arrayEmpresas['Direccion_Contratista'] = $_POST['Direccion_Contratista'];
            $arrayEmpresas['Representante_Contaratista'] = $_POST['Representante_Contaratista'];
            $arrayEmpresas['Identificacion_Representante'] = $_POST['Identificacion_Representante'];
            $arrayEmpresas['Estado'] = $_POST['Estado'];
           // $arrayEmpresas['idPersona'] = $_POST['idPersona'];
            $empresas = new Empresas($arrayEmpresas);
            $empresas->insertar();
            header("Location: ../Vista/CreateEmpresas.php?respuesta=correcto");
        }catch(Exception $e){
            header("Location: ../Vista/CreateEmpresas.php?respuesta=error");
        }
    }

    static public function selectEmpresas()
    {
        $arrayEmpresas = Empresas::getAll();
        $htmlSelect  ="";
        $htmlSelect .="<select name='idEmpresas' id='idEmpresas' class='validate[required] form-control'>";
        $htmlSelect .="<option>Seleccione</option>";
        foreach ($arrayEmpresas as $Empresas){
            $htmlSelect .="<option value='".$Empresas->getIdEmpresas()."' id='".$Empresas->getIdEmpresas()."'>".$Empresas->getRazonsocialContratista()."-".$Empresas->getIdentificacionContatista()."</option>";
        }
        $htmlSelect .="</select>";
        return $htmlSelect;
    }



}