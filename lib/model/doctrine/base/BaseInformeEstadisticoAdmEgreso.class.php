<?php

/**
 * BaseInformeEstadisticoAdmEgreso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property string $urgencia_persona_ref
 * @property string $urgencia_direccion_calle
 * @property string $urgencia_direccion_no
 * @property string $urgencia_direccion_fono
 * @property Internado $Internado
 * 
 * @method integer                     getInternadoId()              Returns the current record's "internado_id" value
 * @method string                      getUrgenciaPersonaRef()       Returns the current record's "urgencia_persona_ref" value
 * @method string                      getUrgenciaDireccionCalle()   Returns the current record's "urgencia_direccion_calle" value
 * @method string                      getUrgenciaDireccionNo()      Returns the current record's "urgencia_direccion_no" value
 * @method string                      getUrgenciaDireccionFono()    Returns the current record's "urgencia_direccion_fono" value
 * @method Internado                   getInternado()                Returns the current record's "Internado" value
 * @method InformeEstadisticoAdmEgreso setInternadoId()              Sets the current record's "internado_id" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaPersonaRef()       Sets the current record's "urgencia_persona_ref" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionCalle()   Sets the current record's "urgencia_direccion_calle" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionNo()      Sets the current record's "urgencia_direccion_no" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionFono()    Sets the current record's "urgencia_direccion_fono" value
 * @method InformeEstadisticoAdmEgreso setInternado()                Sets the current record's "Internado" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInformeEstadisticoAdmEgreso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('informe_estadistico_adm_egreso');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('urgencia_persona_ref', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('urgencia_direccion_calle', 'string', 70, array(
             'type' => 'string',
             'length' => 70,
             ));
        $this->hasColumn('urgencia_direccion_no', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('urgencia_direccion_fono', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

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