<?php
require_once('db_abstract_class.php');

/**
 * Created by PhpStorm.
 * User: New
 * Date: 25/07/2017
 * Time: 03:23 AM
 */
class Entregable extends db_abstract_class
{
    private $idEntregables;
    private $Entregables_Actividad;
    private $Fecha_Cumplimiento;
    private $Porcentaje_Entregable;
    private $Contrato;
    private $Estado;

    /**
     * Entregable constructor.
     * @param $idEntregables
     * @param $Entregables_Actividad
     * @param $Fecha_Cumplimiento
     * @param $Porcentaje_Entregable
     * @param $Contrato
     * @param $Estado
     */
    public function __construct($Entregable_data = array())
    {
        parent::__construct(); //
        if (count($Entregable_data) > 1) { //
            foreach ($Entregable_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->idEntregables = "";
            $this->Entregables_Actividad = "";
            $this->Fecha_Cumplimiento = "";
            $this->Porcentaje_Entregable = "";
            $this->Contrato = "";
            $this->Estado = "";
        }
    }

    /**
     * Licitacion constructor.
     * @param $idEntregables
     * @param $$Entregables_Actividad;
     * @param $$Fecha_Cumplimiento
     * @param $$Porcentaje_Entregable
     * @param $Contrato
     * @param $Estado
     */


    public function getIdEntregables()
    {
        return $this->idEntregables;
    }

    /**
     * @param mixed $idEntregables
     */
    public function setIdEntregables($idEntregables)
    {
        $this->idEntregables = $idEntregables;
    }

    /**
     * @return mixed
     */
    public function getEntregablesActividad()
    {
        return $this->Entregables_Actividad;
    }

    /**
     * @param mixed $Entregables_Actividad
     */
    public function setEntregablesActividad($Entregables_Actividad)
    {
        $this->Entregables_Actividad = $Entregables_Actividad;
    }

    /**
     * @return mixed
     */
    public function getFechaCumplimiento()
    {
        return $this->Fecha_Cumplimiento;
    }

    /**
     * @param mixed $Fecha_Cumplimiento
     */
    public function setFechaCumplimiento($Fecha_Cumplimiento)
    {
        $this->Fecha_Cumplimiento = $Fecha_Cumplimiento;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeEntregable()
    {
        return $this->Porcentaje_Entregable;
    }

    /**
     * @param mixed $Porcentaje_Entregable
     */
    public function setPorcentajeEntregable($Porcentaje_Entregable)
    {
        $this->Porcentaje_Entregable = $Porcentaje_Entregable;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }



}
