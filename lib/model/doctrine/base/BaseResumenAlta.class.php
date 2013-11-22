<?php

/**
 * BaseResumenAlta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $file_internacion_id
 * @property integer $medico_id
 * @property string $servicio
 * @property string $servicio_egreso
 * @property string $diagnostico_provisional
 * @property string $diagnostico_definitivo
 * @property string $operaciones
 * @property string $anamnesis_examfisico
 * @property string $hallazgos_lab_rayx
 * @property string $evolucion_complicacion
 * @property string $cond_trat_ref_pronostico
 * @property date $fecha
 * @property FileInternacion $FileInternacion
 * 
 * @method integer         getId()                       Returns the current record's "id" value
 * @method integer         getFileInternacionId()        Returns the current record's "file_internacion_id" value
 * @method integer         getMedicoId()                 Returns the current record's "medico_id" value
 * @method string          getServicio()                 Returns the current record's "servicio" value
 * @method string          getServicioEgreso()           Returns the current record's "servicio_egreso" value
 * @method string          getDiagnosticoProvisional()   Returns the current record's "diagnostico_provisional" value
 * @method string          getDiagnosticoDefinitivo()    Returns the current record's "diagnostico_definitivo" value
 * @method string          getOperaciones()              Returns the current record's "operaciones" value
 * @method string          getAnamnesisExamfisico()      Returns the current record's "anamnesis_examfisico" value
 * @method string          getHallazgosLabRayx()         Returns the current record's "hallazgos_lab_rayx" value
 * @method string          getEvolucionComplicacion()    Returns the current record's "evolucion_complicacion" value
 * @method string          getCondTratRefPronostico()    Returns the current record's "cond_trat_ref_pronostico" value
 * @method date            getFecha()                    Returns the current record's "fecha" value
 * @method FileInternacion getFileInternacion()          Returns the current record's "FileInternacion" value
 * @method ResumenAlta     setId()                       Sets the current record's "id" value
 * @method ResumenAlta     setFileInternacionId()        Sets the current record's "file_internacion_id" value
 * @method ResumenAlta     setMedicoId()                 Sets the current record's "medico_id" value
 * @method ResumenAlta     setServicio()                 Sets the current record's "servicio" value
 * @method ResumenAlta     setServicioEgreso()           Sets the current record's "servicio_egreso" value
 * @method ResumenAlta     setDiagnosticoProvisional()   Sets the current record's "diagnostico_provisional" value
 * @method ResumenAlta     setDiagnosticoDefinitivo()    Sets the current record's "diagnostico_definitivo" value
 * @method ResumenAlta     setOperaciones()              Sets the current record's "operaciones" value
 * @method ResumenAlta     setAnamnesisExamfisico()      Sets the current record's "anamnesis_examfisico" value
 * @method ResumenAlta     setHallazgosLabRayx()         Sets the current record's "hallazgos_lab_rayx" value
 * @method ResumenAlta     setEvolucionComplicacion()    Sets the current record's "evolucion_complicacion" value
 * @method ResumenAlta     setCondTratRefPronostico()    Sets the current record's "cond_trat_ref_pronostico" value
 * @method ResumenAlta     setFecha()                    Sets the current record's "fecha" value
 * @method ResumenAlta     setFileInternacion()          Sets the current record's "FileInternacion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseResumenAlta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('resumen_alta');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('servicio', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('servicio_egreso', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('diagnostico_provisional', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('diagnostico_definitivo', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('operaciones', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('anamnesis_examfisico', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('hallazgos_lab_rayx', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('evolucion_complicacion', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('cond_trat_ref_pronostico', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}