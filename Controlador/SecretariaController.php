<?php


require_once (__DIR__.'/../Modelo/Secretaria.php');

if(!empty($_GET['action'])){
    EspecialidadController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class SecretariaController
{
 static function main($action){
     if ($action == "crear"){
         SecretariaController::crear();
     }
 }
static public function crear(){
try{
    $arraySecretaria = array();
    $arraySecretaria['Nombre'] = $_POST['Nombre'];
    $arraySecretaria['Mision'] = $_POST['Mision'];
    $arraySecretaria['Vision'] = $_POST['Vision'];
    $arraySecretaria['Objetivos'] = $_POST['Objetivos'];
    $arraySecretaria['Telefono'] = $_POST['Telefono'];
    $arraySecretaria['Direccion']= $_POST['Direccion'];
    $Secretaria = new Secretaria($arraySecretaria);
    $Secretaria->insertar();
}catch (Exception $w){

}
}







}