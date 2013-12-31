<?php

/**
 * BasePieza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $planta_id
 * @property string $nombre
 * @property string $codigo
 * @property string $descripcion
 * @property string $observaciones
 * @property string $plano
 * @property Planta $Planta
 * @property Doctrine_Collection $Cama
 * 
 * @method integer             getPlantaId()      Returns the current record's "planta_id" value
 * @method string              getNombre()        Returns the current record's "nombre" value
 * @method string              getCodigo()        Returns the current record's "codigo" value
 * @method string              getDescripcion()   Returns the current record's "descripcion" value
 * @method string              getObservaciones() Returns the current record's "observaciones" value
 * @method string              getPlano()         Returns the current record's "plano" value
 * @method Planta              getPlanta()        Returns the current record's "Planta" value
 * @method Doctrine_Collection getCama()          Returns the current record's "Cama" collection
 * @method Pieza               setPlantaId()      Sets the current record's "planta_id" value
 * @method Pieza               setNombre()        Sets the current record's "nombre" value
 * @method Pieza               setCodigo()        Sets the current record's "codigo" value
 * @method Pieza               setDescripcion()   Sets the current record's "descripcion" value
 * @method Pieza               setObservaciones() Sets the current record's "observaciones" value
 * @method Pieza               setPlano()         Sets the current record's "plano" value
 * @method Pieza               setPlanta()        Sets the current record's "Planta" value
 * @method Pieza               setCama()          Sets the current record's "Cama" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePieza extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pieza');
        $this->hasColumn('planta_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('codigo', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('descripcion', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('observaciones', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('plano', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Planta', array(
             'local' => 'planta_id',
             'foreign' => 'id'));

        $this->hasMany('Cama', array(
             'local' => 'id',
             'foreign' => 'pieza_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}