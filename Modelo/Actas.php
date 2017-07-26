<?php
require_once('db_abstract_class.php');

class Actas extends db_abstract_class
{
private $Fecha;
private $Hora;
private $Lugar_Reunion;
private $Puntos_Tratados;
private $Acuerdos_Tomados;
private $Observaciones;
private $Persona_idPersona;

    /**
     * Actas constructor.
     * @param $Fecha
     * @param $Hora
     * @param $Lugar_Reunion
     * @param $Lista_Asistencia
     * @param $Puntos_Tratados
     * @param $Acuerdos_Tomados
     * @param $Observaciones
     * @param $Persona_idPersona
     */
    public function __construct($Acta_data = array())
    {
        parent::__construct();
        if(count($Acta_data)>1){
            foreach ($Acta_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->Fecha = "";
            $this->Hora = "";
            $this->Lugar_Reunion = "";
            $this->Puntos_Tratados = "";
            $this->Acuerdos_Tomados = "";
            $this->Observaciones = "";
            $this->Persona_idPersona = "";
        }

    }


    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->Hora;
    }

    /**
     * @param mixed $Hora
     */
    public function setHora($Hora)
    {
        $this->Hora = $Hora;
    }

    /**
     * @return mixed
     */
    public function getLugarReunion()
    {
        return $this->Lugar_Reunion;
    }

    /**
     * @param mixed $Lugar_Reunion
     */
    public function setLugarReunion($Lugar_Reunion)
    {
        $this->Lugar_Reunion = $Lugar_Reunion;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getPuntosTratados()
    {
        return $this->Puntos_Tratados;
    }

    /**
     * @param mixed $Puntos_Tratados
     */
    public function setPuntosTratados($Puntos_Tratados)
    {
        $this->Puntos_Tratados = $Puntos_Tratados;
    }

    /**
     * @return mixed
     */
    public function getAcuerdosTomados()
    {
        return $this->Acuerdos_Tomados;
    }

    /**
     * @param mixed $Acuerdos_Tomados
     */
    public function setAcuerdosTomados($Acuerdos_Tomados)
    {
        $this->Acuerdos_Tomados = $Acuerdos_Tomados;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * @param mixed $Observaciones
     */
    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
    }

    /**
     * @return mixed
     */
    public function getPersonaIdPersona()
    {
        return $this->Persona_idPersona;
    }

    /**
     * @param mixed $Persona_idPersona
     */
    public function setPersonaIdPersona($Persona_idPersona)
    {
        $this->Persona_idPersona = $Persona_idPersona;
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO proyectophp.registro_actas VALUES (NULL, ?, ?, ?, ?, ?, ?,?)",array(
            $this->Fecha,
            $this->Hora,
            $this->Lugar_Reunion,
            $this->Puntos_Tratados,
            $this->Acuerdos_Tomados,
            $this->Observaciones,
            $this->idPersona,
            )
        );
        $this->Disconnect();

    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }


}