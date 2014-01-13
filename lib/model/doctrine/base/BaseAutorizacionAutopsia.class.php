<?php

/**
 * BaseAutorizacionAutopsia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property string $nombre_familiar1
 * @property string $tipo_parentesco1
 * @property string $ci_familiar1
 * @property string $nombre_familiar2
 * @property string $tipo_parentesco2
 * @property string $ci_familiar2
 * @property string $nombre_familiar3
 * @property string $tipo_parentesco3
 * @property string $ci_familiar3
 * @property timestamp $fecha_hora
 * @property Internado $Internado
 * 
 * @method integer              getInternadoId()      Returns the current record's "internado_id" value
 * @method string               getNombreFamiliar1()  Returns the current record's "nombre_familiar1" value
 * @method string               getTipoParentesco1()  Returns the current record's "tipo_parentesco1" value
 * @method string               getCiFamiliar1()      Returns the current record's "ci_familiar1" value
 * @method string               getNombreFamiliar2()  Returns the current record's "nombre_familiar2" value
 * @method string               getTipoParentesco2()  Returns the current record's "tipo_parentesco2" value
 * @method string               getCiFamiliar2()      Returns the current record's "ci_familiar2" value
 * @method string               getNombreFamiliar3()  Returns the current record's "nombre_familiar3" value
 * @method string               getTipoParentesco3()  Returns the current record's "tipo_parentesco3" value
 * @method string               getCiFamiliar3()      Returns the current record's "ci_familiar3" value
 * @method timestamp            getFechaHora()        Returns the current record's "fecha_hora" value
 * @method Internado            getInternado()        Returns the current record's "Internado" value
 * @method AutorizacionAutopsia setInternadoId()      Sets the current record's "internado_id" value
 * @method AutorizacionAutopsia setNombreFamiliar1()  Sets the current record's "nombre_familiar1" value
 * @method AutorizacionAutopsia setTipoParentesco1()  Sets the current record's "tipo_parentesco1" value
 * @method AutorizacionAutopsia setCiFamiliar1()      Sets the current record's "ci_familiar1" value
 * @method AutorizacionAutopsia setNombreFamiliar2()  Sets the current record's "nombre_familiar2" value
 * @method AutorizacionAutopsia setTipoParentesco2()  Sets the current record's "tipo_parentesco2" value
 * @method AutorizacionAutopsia setCiFamiliar2()      Sets the current record's "ci_familiar2" value
 * @method AutorizacionAutopsia setNombreFamiliar3()  Sets the current record's "nombre_familiar3" value
 * @method AutorizacionAutopsia setTipoParentesco3()  Sets the current record's "tipo_parentesco3" value
 * @method AutorizacionAutopsia setCiFamiliar3()      Sets the current record's "ci_familiar3" value
 * @method AutorizacionAutopsia setFechaHora()        Sets the current record's "fecha_hora" value
 * @method AutorizacionAutopsia setInternado()        Sets the current record's "Internado" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAutorizacionAutopsia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('autorizacion_autopsia');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre_familiar1', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('tipo_parentesco1', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('ci_familiar1', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('nombre_familiar2', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tipo_parentesco2', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('ci_familiar2', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('nombre_familiar3', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tipo_parentesco3', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('ci_familiar3', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('fecha_hora', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}