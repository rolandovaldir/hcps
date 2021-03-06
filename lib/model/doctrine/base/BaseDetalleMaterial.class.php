<?php

/**
 * BaseDetalleMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $solicitud_reposicion_material_id
 * @property string $codigo
 * @property string $descripcion
 * @property string $unidad
 * @property integer $saldo_anterior
 * @property integer $reposicion_solicitada
 * @property integer $saldo_actual
 * @property SolicitudReposicionMaterial $SolicitudReposicionMaterial
 * 
 * @method integer                     getSolicitudReposicionMaterialId()    Returns the current record's "solicitud_reposicion_material_id" value
 * @method string                      getCodigo()                           Returns the current record's "codigo" value
 * @method string                      getDescripcion()                      Returns the current record's "descripcion" value
 * @method string                      getUnidad()                           Returns the current record's "unidad" value
 * @method integer                     getSaldoAnterior()                    Returns the current record's "saldo_anterior" value
 * @method integer                     getReposicionSolicitada()             Returns the current record's "reposicion_solicitada" value
 * @method integer                     getSaldoActual()                      Returns the current record's "saldo_actual" value
 * @method SolicitudReposicionMaterial getSolicitudReposicionMaterial()      Returns the current record's "SolicitudReposicionMaterial" value
 * @method DetalleMaterial             setSolicitudReposicionMaterialId()    Sets the current record's "solicitud_reposicion_material_id" value
 * @method DetalleMaterial             setCodigo()                           Sets the current record's "codigo" value
 * @method DetalleMaterial             setDescripcion()                      Sets the current record's "descripcion" value
 * @method DetalleMaterial             setUnidad()                           Sets the current record's "unidad" value
 * @method DetalleMaterial             setSaldoAnterior()                    Sets the current record's "saldo_anterior" value
 * @method DetalleMaterial             setReposicionSolicitada()             Sets the current record's "reposicion_solicitada" value
 * @method DetalleMaterial             setSaldoActual()                      Sets the current record's "saldo_actual" value
 * @method DetalleMaterial             setSolicitudReposicionMaterial()      Sets the current record's "SolicitudReposicionMaterial" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDetalleMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('detalle_material');
        $this->hasColumn('solicitud_reposicion_material_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('codigo', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('descripcion', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('unidad', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('saldo_anterior', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('reposicion_solicitada', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('saldo_actual', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SolicitudReposicionMaterial', array(
             'local' => 'solicitud_reposicion_material_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}