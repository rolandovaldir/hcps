<?php

/**
 * BaseSolicitudExamenLaboratorioClinico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property integer $vobo_medico_id
 * @property array $examenes
 * @property string $material_enviado
 * @property string $otros_examenes
 * @property string $diagnostico_presuntivo
 * @property integer $medico_id
 * @property string $lugar
 * @property date $fecha
 * @property Internado $Internado
 * @property Doctrine_Collection $TipoExamenLaboratorioClinico
 * @property Doctrine_Collection $DetalleSolicitudExamenLaboratorioClinico
 * 
 * @method integer                           getInternadoId()                              Returns the current record's "internado_id" value
 * @method integer                           getVoboMedicoId()                             Returns the current record's "vobo_medico_id" value
 * @method array                             getExamenes()                                 Returns the current record's "examenes" value
 * @method string                            getMaterialEnviado()                          Returns the current record's "material_enviado" value
 * @method string                            getOtrosExamenes()                            Returns the current record's "otros_examenes" value
 * @method string                            getDiagnosticoPresuntivo()                    Returns the current record's "diagnostico_presuntivo" value
 * @method integer                           getMedicoId()                                 Returns the current record's "medico_id" value
 * @method string                            getLugar()                                    Returns the current record's "lugar" value
 * @method date                              getFecha()                                    Returns the current record's "fecha" value
 * @method Internado                         getInternado()                                Returns the current record's "Internado" value
 * @method Doctrine_Collection               getTipoExamenLaboratorioClinico()             Returns the current record's "TipoExamenLaboratorioClinico" collection
 * @method Doctrine_Collection               getDetalleSolicitudExamenLaboratorioClinico() Returns the current record's "DetalleSolicitudExamenLaboratorioClinico" collection
 * @method SolicitudExamenLaboratorioClinico setInternadoId()                              Sets the current record's "internado_id" value
 * @method SolicitudExamenLaboratorioClinico setVoboMedicoId()                             Sets the current record's "vobo_medico_id" value
 * @method SolicitudExamenLaboratorioClinico setExamenes()                                 Sets the current record's "examenes" value
 * @method SolicitudExamenLaboratorioClinico setMaterialEnviado()                          Sets the current record's "material_enviado" value
 * @method SolicitudExamenLaboratorioClinico setOtrosExamenes()                            Sets the current record's "otros_examenes" value
 * @method SolicitudExamenLaboratorioClinico setDiagnosticoPresuntivo()                    Sets the current record's "diagnostico_presuntivo" value
 * @method SolicitudExamenLaboratorioClinico setMedicoId()                                 Sets the current record's "medico_id" value
 * @method SolicitudExamenLaboratorioClinico setLugar()                                    Sets the current record's "lugar" value
 * @method SolicitudExamenLaboratorioClinico setFecha()                                    Sets the current record's "fecha" value
 * @method SolicitudExamenLaboratorioClinico setInternado()                                Sets the current record's "Internado" value
 * @method SolicitudExamenLaboratorioClinico setTipoExamenLaboratorioClinico()             Sets the current record's "TipoExamenLaboratorioClinico" collection
 * @method SolicitudExamenLaboratorioClinico setDetalleSolicitudExamenLaboratorioClinico() Sets the current record's "DetalleSolicitudExamenLaboratorioClinico" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSolicitudExamenLaboratorioClinico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('solicitud_examen_laboratorio_clinico');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('vobo_medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('examenes', 'array', null, array(
             'type' => 'array',
             'notnull' => true,
             ));
        $this->hasColumn('material_enviado', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('otros_examenes', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('diagnostico_presuntivo', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('lugar', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $this->hasMany('TipoExamenLaboratorioClinico', array(
             'refClass' => 'DetalleSolicitudExamenLaboratorioClinico',
             'local' => 'solicitud_examen_laboratorio_clinico_id',
             'foreign' => 'tipo_examen_laboratorio_clinico_id'));

        $this->hasMany('DetalleSolicitudExamenLaboratorioClinico', array(
             'local' => 'id',
             'foreign' => 'solicitud_examen_laboratorio_clinico_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}