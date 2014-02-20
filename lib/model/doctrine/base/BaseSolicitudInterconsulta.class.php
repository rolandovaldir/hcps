<?php

/**
 * BaseSolicitudInterconsulta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property string $dirigida_a
 * @property string $especialidad
 * @property string $motivo
 * @property string $datos_clinicos
 * @property string $informe_medico
 * @property string $conclusiones
 * @property time $hora_solicitud
 * @property date $fecha_solicitud
 * @property Internado $Internado
 * @property Doctrine_Collection $DetalleMedicacion
 * 
 * @method integer                getInternadoId()       Returns the current record's "internado_id" value
 * @method string                 getDirigidaA()         Returns the current record's "dirigida_a" value
 * @method string                 getEspecialidad()      Returns the current record's "especialidad" value
 * @method string                 getMotivo()            Returns the current record's "motivo" value
 * @method string                 getDatosClinicos()     Returns the current record's "datos_clinicos" value
 * @method string                 getInformeMedico()     Returns the current record's "informe_medico" value
 * @method string                 getConclusiones()      Returns the current record's "conclusiones" value
 * @method time                   getHoraSolicitud()     Returns the current record's "hora_solicitud" value
 * @method date                   getFechaSolicitud()    Returns the current record's "fecha_solicitud" value
 * @method Internado              getInternado()         Returns the current record's "Internado" value
 * @method Doctrine_Collection    getDetalleMedicacion() Returns the current record's "DetalleMedicacion" collection
 * @method SolicitudInterconsulta setInternadoId()       Sets the current record's "internado_id" value
 * @method SolicitudInterconsulta setDirigidaA()         Sets the current record's "dirigida_a" value
 * @method SolicitudInterconsulta setEspecialidad()      Sets the current record's "especialidad" value
 * @method SolicitudInterconsulta setMotivo()            Sets the current record's "motivo" value
 * @method SolicitudInterconsulta setDatosClinicos()     Sets the current record's "datos_clinicos" value
 * @method SolicitudInterconsulta setInformeMedico()     Sets the current record's "informe_medico" value
 * @method SolicitudInterconsulta setConclusiones()      Sets the current record's "conclusiones" value
 * @method SolicitudInterconsulta setHoraSolicitud()     Sets the current record's "hora_solicitud" value
 * @method SolicitudInterconsulta setFechaSolicitud()    Sets the current record's "fecha_solicitud" value
 * @method SolicitudInterconsulta setInternado()         Sets the current record's "Internado" value
 * @method SolicitudInterconsulta setDetalleMedicacion() Sets the current record's "DetalleMedicacion" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSolicitudInterconsulta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('solicitud_interconsulta');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('dirigida_a', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('especialidad', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('motivo', 'string', 2000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 2000,
             ));
        $this->hasColumn('datos_clinicos', 'string', 2000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 2000,
             ));
        $this->hasColumn('informe_medico', 'string', 2500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 2500,
             ));
        $this->hasColumn('conclusiones', 'string', 2500, array(
             'type' => 'string',
             'length' => 2500,
             ));
        $this->hasColumn('hora_solicitud', 'time', null, array(
             'type' => 'time',
             'notnull' => true,
             ));
        $this->hasColumn('fecha_solicitud', 'date', null, array(
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

        $this->hasMany('DetalleMedicacion', array(
             'local' => 'id',
             'foreign' => 'solicitud_interconsulta_id'));

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