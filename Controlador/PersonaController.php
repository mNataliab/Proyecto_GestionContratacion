<?php
session_start();
require_once (__DIR__.'/../Modelo/Persona.php');

if(!empty($_GET['action'])){
    PersonaController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}

class PersonaController{

    static function main($action){
        if ($action == "crear"){
            PersonaController::crear();
        }else if($action == "Login"){
            PersonaController::Login();
        }else if($action == "CerrarSession"){
            PersonaController::CerrarSession();
        }

    }


    static public function crear(){
        try{
            $arrayPersona = array();

            if (is_uploaded_file($_FILES['ContratoPDF']['tmp_name'])&& is_uploaded_file($_FILES['imagen']['tmp_name']))
            {

                $nombreDirectorio = "../Contratos-Fotos/";
                $nombreFichero = $_FILES['ContratoPDF']['name'];
                $nombrefoto=$_FILES['imagen']['name'];
                $nuevo_path="../Contratos-Fotos/".date("d")."-".date("F")."-".date("Y")."-".date("H").":".date("i").":".date("s")."-" .$nombrefoto;
                $nuevo_path2="../Contratos-Fotos/".date("d")."-".date("F")."-".date("Y")."-".date("H")."-".date("i")."-".date("s")."-" .$nombreFichero;

                move_uploaded_file($_FILES['ContratoPDF']['tmp_name'], $nombreDirectorio.date("d")."-".date("F")."-".date("Y")."-".date("H").":".date("i").":".date("s")."-" .$nombreFichero);
                move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreDirectorio.date("d")."-".date("F")."-".date("Y")."-".date("H").":".date("i").":".date("s")."-" .$nombrefoto);

            } else{
                echo ("No se ha podido subir el fichero");
             header("Location: ../Vista/createPersona.php?respuesta=errorFoto");
            }

            $arrayPersona['Tipo_Documento'] = $_POST['TipoDocumento'];
            $arrayPersona['Documento']=$_POST['Documento'];
            $arrayPersona['Foto'] = $nuevo_path;
            $arrayPersona['Fecha_Nacimiento']=$_POST['Fecha_Nacimiento'];
            $arrayPersona['Genero'] = $_POST['Genero'];
            $arrayPersona['Nombres'] = $_POST['Nombres'];
            $arrayPersona['Apellidos'] = $_POST['Apellidos'];
            $arrayPersona['Telefono'] = $_POST['Telefono'];
            $arrayPersona['Direccion'] = $_POST['Direccion'];
            $arrayPersona['Correo'] = $_POST['Correo'];
            $arrayPersona['Contrato_PDF'] = $nuevo_path2;
            $arrayPersona['NRP'] = $_POST['NRP'];
            $arrayPersona['Usuario'] = $_POST['Usuario'];
            $arrayPersona['Contrasena'] = $_POST['Contrasena'];
            $arrayPersona['Estado'] = $_POST['Estado'];
            $arrayPersona['Cargo'] = $_POST['Cargo'];
            $arrayPersona['idSecretarias'] = $_POST['idSecretarias'];
            $Persona = new Persona($arrayPersona);
            $Persona->insertar();
            header("Location: ../Vista/createPersona.php?respuesta=correcto");


        }catch(Exception $e){
            header("Location: ../Vista/createPersona.php?respuesta=error");
        }
    }

  static public function Login (){
        try {
            $Usuario = $_POST['Usuario'];
            $Contrasena = $_POST['Contrasena'];
            $arrayPesona= array();
            if(!empty($Usuario) && !empty($Contrasena)){
                $respuesta = PersonaController::validLogin($Usuario, $Contrasena);
                if (is_array($respuesta)) {

                    $_SESSION['verificar']=true;
                    $_SESSION['DataPersona'] = $respuesta;
                    echo TRUE;

                   // PersonaController::InicioUsuario($respuesta);
                }else if($respuesta == "Password Incorrecto"){
                    echo "<div class='alert alert-danger alert-dismissable'>";
                    echo "    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                    echo "    <strong>Error!</strong>. La Contraseña No Coincide Con El Usuario.";
                    echo "</div>";
                }else if($respuesta == "No existe el usuario"){
                    echo "<div class='alert alert-danger alert-dismissable'>";
                    echo "    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                    echo "    <strong>Error!</strong>. No Existe Un Usuario Con Estos Datos.";
                    echo "</div>";
                }
            }else{
                echo "<div class='alert alert-danger alert-dismissable'>";
                echo "    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "    <strong>Error!</strong>.Datos Vacios.";
                echo "</div>";
            }
        } catch (Exception $e) {
            echo "<div class='alert alert-danger alert-dismissable'>";
            echo "    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "    <strong>Error!</strong>".+$e->getMessage();
            echo "</div>";
        }
    }

    public function validLogin ($Usuario, $Contrasena) {

        $arrPersona = array();
        $tmp = new Persona();
        $getTempUser = $tmp->getRows("SELECT * FROM proyectophp.persona WHERE Usuario = '".$Usuario."'");
        if(count($getTempUser) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM proyectophp.persona WHERE Usuario = '".$Usuario."' AND Contrasena = '".$Contrasena."'");
            if(count($getrows) >= 1){
                foreach ($getrows as $valor) {
                    return $valor;
                }
            }else{
                return "Password Incorrecto";
            }
        }else{
            return "No existe el usuario";
        }
        $tmp->Disconnect();
        return $arrPersona;
    }
   static public function Verificacion(){
        $arrayperso = array();
        $tmp = new Persona();
        $Usuario=$_POST['Usuario'];
        $getUsuario = $tmp->getRows("SELECT * FROM proyectophp.persona WHERE Usuario='".$Usuario."'");
        if (count($getUsuario)>=1){
             echo true;
        }else{
             echo false;
        }
        $tmp->Disconnect();
        return $arrayperso;

    }

    public function CerrarSession (){

        unset($_COOKIE);
        header("Location: ../Vista/login.php");
        session_destroy();
    }
   static public function InicioUsuario($respuesta){
        $arrayPesona=$respuesta;
        foreach ($arrayPesona as $persona){
            $htmlInicio="";
            $htmlInicio .="<h5 class='media-heading'>".$persona->getNombres()." ".$persona->getApellidos()."</h5>";
            $htmlInicio .="<ul class='list-unstyled user-info'>";
            $htmlInicio .="<li>".$persona->getCargo()."</li>";
            $htmlInicio .="<li>Pendiente<br>";
            $htmlInicio .="<small><i class='fa fa-calendar'></i>".date('d').' de '.date('F').' del '.date('Y')."</small>";
            $htmlInicio .="</li>";
            $htmlInicio .="</ul>";
        }
        return $htmlInicio;
    }
    public function Usuario (){
       $arrPerson = Persona::getAll();
        $htmlSelect = "";
        foreach ($arrPerson as $Persona) {
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td>" . $Persona>getUsuario() . "</td>";
            $htmlSelect .= "<td>";
            $htmlSelect .= "</td>";
            $htmlSelect .= "</tr>";
        }

        return  $htmlSelect;
    }
}