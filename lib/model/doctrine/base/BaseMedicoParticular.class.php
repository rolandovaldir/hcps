<?php

/**
 * BaseMedicoParticular
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $junta_medica_id
 * @property string $nombre
 * @property string $especialidad
 * @property string $cargo
 * @property JuntaMedica $JuntaMedica
 * 
 * @method integer          getJuntaMedicaId()   Returns the current record's "junta_medica_id" value
 * @method string           getNombre()          Returns the current record's "nombre" value
 * @method string           getEspecialidad()    Returns the current record's "especialidad" value
 * @method string           getCargo()           Returns the current record's "cargo" value
 * @method JuntaMedica      getJuntaMedica()     Returns the current record's "JuntaMedica" value
 * @method MedicoParticular setJuntaMedicaId()   Sets the current record's "junta_medica_id" value
 * @method MedicoParticular setNombre()          Sets the current record's "nombre" value
 * @method MedicoParticular setEspecialidad()    Sets the current record's "especialidad" value
 * @method MedicoParticular setCargo()           Sets the current record's "cargo" value
 * @method MedicoParticular setJuntaMedica()     Sets the current record's "JuntaMedica" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedicoParticular extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('medico_particular');
        $this->hasColumn('junta_medica_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('especialidad', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('cargo', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JuntaMedica', array(
             'local' => 'junta_medica_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}