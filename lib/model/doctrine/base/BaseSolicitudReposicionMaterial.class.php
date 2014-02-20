<?php

/**
 * BaseSolicitudReposicionMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property date $fecha
 * @property string $unidad
 * @property string $encargado
 * @property Internado $Internado
 * @property Doctrine_Collection $DetalleMaterial
 * 
 * @method integer                     getInternadoId()     Returns the current record's "internado_id" value
 * @method date                        getFecha()           Returns the current record's "fecha" value
 * @method string                      getUnidad()          Returns the current record's "unidad" value
 * @method string                      getEncargado()       Returns the current record's "encargado" value
 * @method Internado                   getInternado()       Returns the current record's "Internado" value
 * @method Doctrine_Collection         getDetalleMaterial() Returns the current record's "DetalleMaterial" collection
 * @method SolicitudReposicionMaterial setInternadoId()     Sets the current record's "internado_id" value
 * @method SolicitudReposicionMaterial setFecha()           Sets the current record's "fecha" value
 * @method SolicitudReposicionMaterial setUnidad()          Sets the current record's "unidad" value
 * @method SolicitudReposicionMaterial setEncargado()       Sets the current record's "encargado" value
 * @method SolicitudReposicionMaterial setInternado()       Sets the current record's "Internado" value
 * @method SolicitudReposicionMaterial setDetalleMaterial() Sets the current record's "DetalleMaterial" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSolicitudReposicionMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('solicitud_reposicion_material');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('unidad', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('encargado', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $this->hasMany('DetalleMaterial', array(
             'local' => 'id',
             'foreign' => 'solicitud_reposicion_material_id'));

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