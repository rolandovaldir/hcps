<?php

/**
 * BaseDetallePapeletaPedidoMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $papeleta_pedido_material_id
 * @property string $codigo
 * @property integer $cantidad
 * @property string $unidad
 * @property string $detalle
 * @property PapeletaPedidoMaterial $PapeletaPedidoMaterial
 * 
 * @method integer                       getPapeletaPedidoMaterialId()    Returns the current record's "papeleta_pedido_material_id" value
 * @method string                        getCodigo()                      Returns the current record's "codigo" value
 * @method integer                       getCantidad()                    Returns the current record's "cantidad" value
 * @method string                        getUnidad()                      Returns the current record's "unidad" value
 * @method string                        getDetalle()                     Returns the current record's "detalle" value
 * @method PapeletaPedidoMaterial        getPapeletaPedidoMaterial()      Returns the current record's "PapeletaPedidoMaterial" value
 * @method DetallePapeletaPedidoMaterial setPapeletaPedidoMaterialId()    Sets the current record's "papeleta_pedido_material_id" value
 * @method DetallePapeletaPedidoMaterial setCodigo()                      Sets the current record's "codigo" value
 * @method DetallePapeletaPedidoMaterial setCantidad()                    Sets the current record's "cantidad" value
 * @method DetallePapeletaPedidoMaterial setUnidad()                      Sets the current record's "unidad" value
 * @method DetallePapeletaPedidoMaterial setDetalle()                     Sets the current record's "detalle" value
 * @method DetallePapeletaPedidoMaterial setPapeletaPedidoMaterial()      Sets the current record's "PapeletaPedidoMaterial" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDetallePapeletaPedidoMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('detalle_papeleta_pedido_material');
        $this->hasColumn('papeleta_pedido_material_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('codigo', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('cantidad', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('unidad', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('detalle', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PapeletaPedidoMaterial', array(
             'local' => 'papeleta_pedido_material_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}