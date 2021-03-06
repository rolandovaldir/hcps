<?php

/**
 * BaseUsoHospitalario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property string $lugar
 * @property date $fecha
 * @property integer $medico_id
 * @property string $codigo
 * @property string $especialidad
 * @property Internado $Internado
 * @property Medico $Medico
 * @property Doctrine_Collection $DetallesUsoHospitalario
 * 
 * @method integer             getInternadoId()             Returns the current record's "internado_id" value
 * @method string              getLugar()                   Returns the current record's "lugar" value
 * @method date                getFecha()                   Returns the current record's "fecha" value
 * @method integer             getMedicoId()                Returns the current record's "medico_id" value
 * @method string              getCodigo()                  Returns the current record's "codigo" value
 * @method string              getEspecialidad()            Returns the current record's "especialidad" value
 * @method Internado           getInternado()               Returns the current record's "Internado" value
 * @method Medico              getMedico()                  Returns the current record's "Medico" value
 * @method Doctrine_Collection getDetallesUsoHospitalario() Returns the current record's "DetallesUsoHospitalario" collection
 * @method UsoHospitalario     setInternadoId()             Sets the current record's "internado_id" value
 * @method UsoHospitalario     setLugar()                   Sets the current record's "lugar" value
 * @method UsoHospitalario     setFecha()                   Sets the current record's "fecha" value
 * @method UsoHospitalario     setMedicoId()                Sets the current record's "medico_id" value
 * @method UsoHospitalario     setCodigo()                  Sets the current record's "codigo" value
 * @method UsoHospitalario     setEspecialidad()            Sets the current record's "especialidad" value
 * @method UsoHospitalario     setInternado()               Sets the current record's "Internado" value
 * @method UsoHospitalario     setMedico()                  Sets the current record's "Medico" value
 * @method UsoHospitalario     setDetallesUsoHospitalario() Sets the current record's "DetallesUsoHospitalario" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsoHospitalario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('uso_hospitalario');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('lugar', 'string', 60, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('codigo', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('especialidad', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $this->hasOne('Medico', array(
             'local' => 'medico_id',
             'foreign' => 'id'));

        $this->hasMany('DetalleUsoHospitalario as DetallesUsoHospitalario', array(
             'local' => 'id',
             'foreign' => 'uso_hospitalario_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $signable0 = new Doctrine_Template_Signable();
        $anulablebehavior0 = new AnulableBehavior(array(
             'type' => 'string',
             'length' => 200,
             'name' => 'motivo_anulacion',
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
        $this->actAs($anulablebehavior0);
    }
}