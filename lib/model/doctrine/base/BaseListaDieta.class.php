<?php

/**
 * BaseListaDieta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $file_internacion_id
 * @property integer $enfermera_id
 * @property integer $servicio_id
 * @property date $fecha
 * @property string $observacion
 * @property FileInternacion $FileInternacion
 * @property Doctrine_Collection $ListaDieta
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getFileInternacionId()   Returns the current record's "file_internacion_id" value
 * @method integer             getEnfermeraId()         Returns the current record's "enfermera_id" value
 * @method integer             getServicioId()          Returns the current record's "servicio_id" value
 * @method date                getFecha()               Returns the current record's "fecha" value
 * @method string              getObservacion()         Returns the current record's "observacion" value
 * @method FileInternacion     getFileInternacion()     Returns the current record's "FileInternacion" value
 * @method Doctrine_Collection getListaDieta()          Returns the current record's "ListaDieta" collection
 * @method ListaDieta          setId()                  Sets the current record's "id" value
 * @method ListaDieta          setFileInternacionId()   Sets the current record's "file_internacion_id" value
 * @method ListaDieta          setEnfermeraId()         Sets the current record's "enfermera_id" value
 * @method ListaDieta          setServicioId()          Sets the current record's "servicio_id" value
 * @method ListaDieta          setFecha()               Sets the current record's "fecha" value
 * @method ListaDieta          setObservacion()         Sets the current record's "observacion" value
 * @method ListaDieta          setFileInternacion()     Sets the current record's "FileInternacion" value
 * @method ListaDieta          setListaDieta()          Sets the current record's "ListaDieta" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseListaDieta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('lista_dieta');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enfermera_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('servicio_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('observacion', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('DietaPaciente as ListaDieta', array(
             'local' => 'id',
             'foreign' => 'lista_dieta_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}