<?php

/**
 * BasePapeletaPedidoMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property integer $enfermera_id
 * @property date $fecha_solicitud
 * @property boolean $entregado
 * @property Internado $Internado
 * @property Doctrine_Collection $DetallePapeletaPedidoMaterial
 * 
 * @method integer                getInternadoId()                   Returns the current record's "internado_id" value
 * @method integer                getEnfermeraId()                   Returns the current record's "enfermera_id" value
 * @method date                   getFechaSolicitud()                Returns the current record's "fecha_solicitud" value
 * @method boolean                getEntregado()                     Returns the current record's "entregado" value
 * @method Internado              getInternado()                     Returns the current record's "Internado" value
 * @method Doctrine_Collection    getDetallePapeletaPedidoMaterial() Returns the current record's "DetallePapeletaPedidoMaterial" collection
 * @method PapeletaPedidoMaterial setInternadoId()                   Sets the current record's "internado_id" value
 * @method PapeletaPedidoMaterial setEnfermeraId()                   Sets the current record's "enfermera_id" value
 * @method PapeletaPedidoMaterial setFechaSolicitud()                Sets the current record's "fecha_solicitud" value
 * @method PapeletaPedidoMaterial setEntregado()                     Sets the current record's "entregado" value
 * @method PapeletaPedidoMaterial setInternado()                     Sets the current record's "Internado" value
 * @method PapeletaPedidoMaterial setDetallePapeletaPedidoMaterial() Sets the current record's "DetallePapeletaPedidoMaterial" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePapeletaPedidoMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('papeleta_pedido_material');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enfermera_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fecha_solicitud', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('entregado', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $this->hasMany('DetallePapeletaPedidoMaterial', array(
             'local' => 'id',
             'foreign' => 'papeleta_pedido_material_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}