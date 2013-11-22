<?php

/**
 * BaseSolicitudTransfusionSanguinea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $file_internacion_id
 * @property string $quirofano
 * @property string $requiere_transfusion_de
 * @property string $cumplirse_enforma
 * @property date $fecha_prog_quirurgica
 * @property time $hora_prog_quirurgica
 * @property string $quirofano_prog_quirurgica
 * @property integer $cantidad_requerida
 * @property string $cantidad_requerida_unidad
 * @property string $observaciones
 * @property date $fecha_solicitud
 * @property time $hora_solicitud
 * @property integer $medico_id
 * @property string $numero
 * @property date $fecha_recepcion_solicitud
 * @property string $bolsa_compatible1
 * @property string $bolsa_compatible2
 * @property string $bolsa_compatible3
 * @property string $bolsa_compatible4
 * @property string $bolsa_compatible5
 * @property string $grupo_sanguineo_receptor
 * @property string $hr_receptor
 * @property string $anticuerpos_irreg
 * @property string $nombre_res_bancosangre
 * @property FileInternacion $FileInternacion
 * 
 * @method integer                       getId()                        Returns the current record's "id" value
 * @method integer                       getFileInternacionId()         Returns the current record's "file_internacion_id" value
 * @method string                        getQuirofano()                 Returns the current record's "quirofano" value
 * @method string                        getRequiereTransfusionDe()     Returns the current record's "requiere_transfusion_de" value
 * @method string                        getCumplirseEnforma()          Returns the current record's "cumplirse_enforma" value
 * @method date                          getFechaProgQuirurgica()       Returns the current record's "fecha_prog_quirurgica" value
 * @method time                          getHoraProgQuirurgica()        Returns the current record's "hora_prog_quirurgica" value
 * @method string                        getQuirofanoProgQuirurgica()   Returns the current record's "quirofano_prog_quirurgica" value
 * @method integer                       getCantidadRequerida()         Returns the current record's "cantidad_requerida" value
 * @method string                        getCantidadRequeridaUnidad()   Returns the current record's "cantidad_requerida_unidad" value
 * @method string                        getObservaciones()             Returns the current record's "observaciones" value
 * @method date                          getFechaSolicitud()            Returns the current record's "fecha_solicitud" value
 * @method time                          getHoraSolicitud()             Returns the current record's "hora_solicitud" value
 * @method integer                       getMedicoId()                  Returns the current record's "medico_id" value
 * @method string                        getNumero()                    Returns the current record's "numero" value
 * @method date                          getFechaRecepcionSolicitud()   Returns the current record's "fecha_recepcion_solicitud" value
 * @method string                        getBolsaCompatible1()          Returns the current record's "bolsa_compatible1" value
 * @method string                        getBolsaCompatible2()          Returns the current record's "bolsa_compatible2" value
 * @method string                        getBolsaCompatible3()          Returns the current record's "bolsa_compatible3" value
 * @method string                        getBolsaCompatible4()          Returns the current record's "bolsa_compatible4" value
 * @method string                        getBolsaCompatible5()          Returns the current record's "bolsa_compatible5" value
 * @method string                        getGrupoSanguineoReceptor()    Returns the current record's "grupo_sanguineo_receptor" value
 * @method string                        getHrReceptor()                Returns the current record's "hr_receptor" value
 * @method string                        getAnticuerposIrreg()          Returns the current record's "anticuerpos_irreg" value
 * @method string                        getNombreResBancosangre()      Returns the current record's "nombre_res_bancosangre" value
 * @method FileInternacion               getFileInternacion()           Returns the current record's "FileInternacion" value
 * @method SolicitudTransfusionSanguinea setId()                        Sets the current record's "id" value
 * @method SolicitudTransfusionSanguinea setFileInternacionId()         Sets the current record's "file_internacion_id" value
 * @method SolicitudTransfusionSanguinea setQuirofano()                 Sets the current record's "quirofano" value
 * @method SolicitudTransfusionSanguinea setRequiereTransfusionDe()     Sets the current record's "requiere_transfusion_de" value
 * @method SolicitudTransfusionSanguinea setCumplirseEnforma()          Sets the current record's "cumplirse_enforma" value
 * @method SolicitudTransfusionSanguinea setFechaProgQuirurgica()       Sets the current record's "fecha_prog_quirurgica" value
 * @method SolicitudTransfusionSanguinea setHoraProgQuirurgica()        Sets the current record's "hora_prog_quirurgica" value
 * @method SolicitudTransfusionSanguinea setQuirofanoProgQuirurgica()   Sets the current record's "quirofano_prog_quirurgica" value
 * @method SolicitudTransfusionSanguinea setCantidadRequerida()         Sets the current record's "cantidad_requerida" value
 * @method SolicitudTransfusionSanguinea setCantidadRequeridaUnidad()   Sets the current record's "cantidad_requerida_unidad" value
 * @method SolicitudTransfusionSanguinea setObservaciones()             Sets the current record's "observaciones" value
 * @method SolicitudTransfusionSanguinea setFechaSolicitud()            Sets the current record's "fecha_solicitud" value
 * @method SolicitudTransfusionSanguinea setHoraSolicitud()             Sets the current record's "hora_solicitud" value
 * @method SolicitudTransfusionSanguinea setMedicoId()                  Sets the current record's "medico_id" value
 * @method SolicitudTransfusionSanguinea setNumero()                    Sets the current record's "numero" value
 * @method SolicitudTransfusionSanguinea setFechaRecepcionSolicitud()   Sets the current record's "fecha_recepcion_solicitud" value
 * @method SolicitudTransfusionSanguinea setBolsaCompatible1()          Sets the current record's "bolsa_compatible1" value
 * @method SolicitudTransfusionSanguinea setBolsaCompatible2()          Sets the current record's "bolsa_compatible2" value
 * @method SolicitudTransfusionSanguinea setBolsaCompatible3()          Sets the current record's "bolsa_compatible3" value
 * @method SolicitudTransfusionSanguinea setBolsaCompatible4()          Sets the current record's "bolsa_compatible4" value
 * @method SolicitudTransfusionSanguinea setBolsaCompatible5()          Sets the current record's "bolsa_compatible5" value
 * @method SolicitudTransfusionSanguinea setGrupoSanguineoReceptor()    Sets the current record's "grupo_sanguineo_receptor" value
 * @method SolicitudTransfusionSanguinea setHrReceptor()                Sets the current record's "hr_receptor" value
 * @method SolicitudTransfusionSanguinea setAnticuerposIrreg()          Sets the current record's "anticuerpos_irreg" value
 * @method SolicitudTransfusionSanguinea setNombreResBancosangre()      Sets the current record's "nombre_res_bancosangre" value
 * @method SolicitudTransfusionSanguinea setFileInternacion()           Sets the current record's "FileInternacion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSolicitudTransfusionSanguinea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('solicitud_transfusion_sanguinea');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('quirofano', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('requiere_transfusion_de', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             ));
        $this->hasColumn('cumplirse_enforma', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             ));
        $this->hasColumn('fecha_prog_quirurgica', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('hora_prog_quirurgica', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('quirofano_prog_quirurgica', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('cantidad_requerida', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('cantidad_requerida_unidad', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('observaciones', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('fecha_solicitud', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('hora_solicitud', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('numero', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('fecha_recepcion_solicitud', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('bolsa_compatible1', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('bolsa_compatible2', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('bolsa_compatible3', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('bolsa_compatible4', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('bolsa_compatible5', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('grupo_sanguineo_receptor', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('hr_receptor', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('anticuerpos_irreg', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('nombre_res_bancosangre', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}