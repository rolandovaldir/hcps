<?php

/**
 * BaseInternado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $afiliado_id
 * @property integer $noAfiliado_id
 * @property integer $categoria_id
 * @property integer $cama_id
 * @property integer $medico_id
 * @property integer $medico_consulta_id
 * @property integer $medico_referencia_id
 * @property string $formulario_referencia
 * @property string $diagnostico
 * @property string $procedencia
 * @property string $medio_referencia
 * @property string $observaciones
 * @property date $fecha
 * @property time $hora
 * @property string $conducto
 * @property boolean $es_afiliado
 * @property boolean $alta
 * @property date $altaFecha
 * @property time $altaHora
 * @property string $diagnostico_alta
 * @property string $tratamientio
 * @property string $lugar_referencia_salida
 * @property string $medio_referencia_salida
 * @property string $motivo_refe_retorno
 * @property Afiliado $Afiliado
 * @property PacienteOtroseguro $PacienteOtroseguro
 * @property Doctrine_Collection $OrdenMedica
 * @property Doctrine_Collection $JuntaMedica
 * @property Doctrine_Collection $ExamenFisicoRecienNacido
 * @property Doctrine_Collection $SolicitudInterconsulta
 * @property Doctrine_Collection $SolicitudServicio
 * @property Doctrine_Collection $SolicitudReposicionMaterial
 * @property Doctrine_Collection $SignosVitalesNursery
 * @property Doctrine_Collection $NotasEnfermeria
 * @property Doctrine_Collection $NotasEvolucion
 * @property Cama $Cama
 * @property Doctrine_Collection $AutorizacionesTratamiento
 * @property Doctrine_Collection $AutorizacionesAltaSolicitada
 * @property Doctrine_Collection $AutorizacionesAutopsia
 * @property Doctrine_Collection $ProgramacionesCirugia
 * @property Doctrine_Collection $SolicitudesExamenLaboratorioClinico
 * @property Doctrine_Collection $AdministracionesMedicamento
 * @property Doctrine_Collection $ResumenesAlta
 * @property Doctrine_Collection $AtencionesEnfermeria
 * @property Doctrine_Collection $ListasDieta
 * @property Doctrine_Collection $SolicitudesTransfusionSanguinea
 * @property Doctrine_Collection $InformesEstadisticoAdmEgreso
 * @property Doctrine_Collection $PapeletasPedidoMaterial
 * @property Doctrine_Collection $ResumenAlta
 * 
 * @method integer             getAfiliadoId()                          Returns the current record's "afiliado_id" value
 * @method integer             getNoAfiliadoId()                        Returns the current record's "noAfiliado_id" value
 * @method integer             getCategoriaId()                         Returns the current record's "categoria_id" value
 * @method integer             getCamaId()                              Returns the current record's "cama_id" value
 * @method integer             getMedicoId()                            Returns the current record's "medico_id" value
 * @method integer             getMedicoConsultaId()                    Returns the current record's "medico_consulta_id" value
 * @method integer             getMedicoReferenciaId()                  Returns the current record's "medico_referencia_id" value
 * @method string              getFormularioReferencia()                Returns the current record's "formulario_referencia" value
 * @method string              getDiagnostico()                         Returns the current record's "diagnostico" value
 * @method string              getProcedencia()                         Returns the current record's "procedencia" value
 * @method string              getMedioReferencia()                     Returns the current record's "medio_referencia" value
 * @method string              getObservaciones()                       Returns the current record's "observaciones" value
 * @method date                getFecha()                               Returns the current record's "fecha" value
 * @method time                getHora()                                Returns the current record's "hora" value
 * @method string              getConducto()                            Returns the current record's "conducto" value
 * @method boolean             getEsAfiliado()                          Returns the current record's "es_afiliado" value
 * @method boolean             getAlta()                                Returns the current record's "alta" value
 * @method date                getAltaFecha()                           Returns the current record's "altaFecha" value
 * @method time                getAltaHora()                            Returns the current record's "altaHora" value
 * @method string              getDiagnosticoAlta()                     Returns the current record's "diagnostico_alta" value
 * @method string              getTratamientio()                        Returns the current record's "tratamientio" value
 * @method string              getLugarReferenciaSalida()               Returns the current record's "lugar_referencia_salida" value
 * @method string              getMedioReferenciaSalida()               Returns the current record's "medio_referencia_salida" value
 * @method string              getMotivoRefeRetorno()                   Returns the current record's "motivo_refe_retorno" value
 * @method Afiliado            getAfiliado()                            Returns the current record's "Afiliado" value
 * @method PacienteOtroseguro  getPacienteOtroseguro()                  Returns the current record's "PacienteOtroseguro" value
 * @method Doctrine_Collection getOrdenMedica()                         Returns the current record's "OrdenMedica" collection
 * @method Doctrine_Collection getJuntaMedica()                         Returns the current record's "JuntaMedica" collection
 * @method Doctrine_Collection getExamenFisicoRecienNacido()            Returns the current record's "ExamenFisicoRecienNacido" collection
 * @method Doctrine_Collection getSolicitudInterconsulta()              Returns the current record's "SolicitudInterconsulta" collection
 * @method Doctrine_Collection getSolicitudServicio()                   Returns the current record's "SolicitudServicio" collection
 * @method Doctrine_Collection getSolicitudReposicionMaterial()         Returns the current record's "SolicitudReposicionMaterial" collection
 * @method Doctrine_Collection getSignosVitalesNursery()                Returns the current record's "SignosVitalesNursery" collection
 * @method Doctrine_Collection getNotasEnfermeria()                     Returns the current record's "NotasEnfermeria" collection
 * @method Doctrine_Collection getNotasEvolucion()                      Returns the current record's "NotasEvolucion" collection
 * @method Cama                getCama()                                Returns the current record's "Cama" value
 * @method Doctrine_Collection getAutorizacionesTratamiento()           Returns the current record's "AutorizacionesTratamiento" collection
 * @method Doctrine_Collection getAutorizacionesAltaSolicitada()        Returns the current record's "AutorizacionesAltaSolicitada" collection
 * @method Doctrine_Collection getAutorizacionesAutopsia()              Returns the current record's "AutorizacionesAutopsia" collection
 * @method Doctrine_Collection getProgramacionesCirugia()               Returns the current record's "ProgramacionesCirugia" collection
 * @method Doctrine_Collection getSolicitudesExamenLaboratorioClinico() Returns the current record's "SolicitudesExamenLaboratorioClinico" collection
 * @method Doctrine_Collection getAdministracionesMedicamento()         Returns the current record's "AdministracionesMedicamento" collection
 * @method Doctrine_Collection getResumenesAlta()                       Returns the current record's "ResumenesAlta" collection
 * @method Doctrine_Collection getAtencionesEnfermeria()                Returns the current record's "AtencionesEnfermeria" collection
 * @method Doctrine_Collection getListasDieta()                         Returns the current record's "ListasDieta" collection
 * @method Doctrine_Collection getSolicitudesTransfusionSanguinea()     Returns the current record's "SolicitudesTransfusionSanguinea" collection
 * @method Doctrine_Collection getInformesEstadisticoAdmEgreso()        Returns the current record's "InformesEstadisticoAdmEgreso" collection
 * @method Doctrine_Collection getPapeletasPedidoMaterial()             Returns the current record's "PapeletasPedidoMaterial" collection
 * @method Doctrine_Collection getResumenAlta()                         Returns the current record's "ResumenAlta" collection
 * @method Internado           setAfiliadoId()                          Sets the current record's "afiliado_id" value
 * @method Internado           setNoAfiliadoId()                        Sets the current record's "noAfiliado_id" value
 * @method Internado           setCategoriaId()                         Sets the current record's "categoria_id" value
 * @method Internado           setCamaId()                              Sets the current record's "cama_id" value
 * @method Internado           setMedicoId()                            Sets the current record's "medico_id" value
 * @method Internado           setMedicoConsultaId()                    Sets the current record's "medico_consulta_id" value
 * @method Internado           setMedicoReferenciaId()                  Sets the current record's "medico_referencia_id" value
 * @method Internado           setFormularioReferencia()                Sets the current record's "formulario_referencia" value
 * @method Internado           setDiagnostico()                         Sets the current record's "diagnostico" value
 * @method Internado           setProcedencia()                         Sets the current record's "procedencia" value
 * @method Internado           setMedioReferencia()                     Sets the current record's "medio_referencia" value
 * @method Internado           setObservaciones()                       Sets the current record's "observaciones" value
 * @method Internado           setFecha()                               Sets the current record's "fecha" value
 * @method Internado           setHora()                                Sets the current record's "hora" value
 * @method Internado           setConducto()                            Sets the current record's "conducto" value
 * @method Internado           setEsAfiliado()                          Sets the current record's "es_afiliado" value
 * @method Internado           setAlta()                                Sets the current record's "alta" value
 * @method Internado           setAltaFecha()                           Sets the current record's "altaFecha" value
 * @method Internado           setAltaHora()                            Sets the current record's "altaHora" value
 * @method Internado           setDiagnosticoAlta()                     Sets the current record's "diagnostico_alta" value
 * @method Internado           setTratamientio()                        Sets the current record's "tratamientio" value
 * @method Internado           setLugarReferenciaSalida()               Sets the current record's "lugar_referencia_salida" value
 * @method Internado           setMedioReferenciaSalida()               Sets the current record's "medio_referencia_salida" value
 * @method Internado           setMotivoRefeRetorno()                   Sets the current record's "motivo_refe_retorno" value
 * @method Internado           setAfiliado()                            Sets the current record's "Afiliado" value
 * @method Internado           setPacienteOtroseguro()                  Sets the current record's "PacienteOtroseguro" value
 * @method Internado           setOrdenMedica()                         Sets the current record's "OrdenMedica" collection
 * @method Internado           setJuntaMedica()                         Sets the current record's "JuntaMedica" collection
 * @method Internado           setExamenFisicoRecienNacido()            Sets the current record's "ExamenFisicoRecienNacido" collection
 * @method Internado           setSolicitudInterconsulta()              Sets the current record's "SolicitudInterconsulta" collection
 * @method Internado           setSolicitudServicio()                   Sets the current record's "SolicitudServicio" collection
 * @method Internado           setSolicitudReposicionMaterial()         Sets the current record's "SolicitudReposicionMaterial" collection
 * @method Internado           setSignosVitalesNursery()                Sets the current record's "SignosVitalesNursery" collection
 * @method Internado           setNotasEnfermeria()                     Sets the current record's "NotasEnfermeria" collection
 * @method Internado           setNotasEvolucion()                      Sets the current record's "NotasEvolucion" collection
 * @method Internado           setCama()                                Sets the current record's "Cama" value
 * @method Internado           setAutorizacionesTratamiento()           Sets the current record's "AutorizacionesTratamiento" collection
 * @method Internado           setAutorizacionesAltaSolicitada()        Sets the current record's "AutorizacionesAltaSolicitada" collection
 * @method Internado           setAutorizacionesAutopsia()              Sets the current record's "AutorizacionesAutopsia" collection
 * @method Internado           setProgramacionesCirugia()               Sets the current record's "ProgramacionesCirugia" collection
 * @method Internado           setSolicitudesExamenLaboratorioClinico() Sets the current record's "SolicitudesExamenLaboratorioClinico" collection
 * @method Internado           setAdministracionesMedicamento()         Sets the current record's "AdministracionesMedicamento" collection
 * @method Internado           setResumenesAlta()                       Sets the current record's "ResumenesAlta" collection
 * @method Internado           setAtencionesEnfermeria()                Sets the current record's "AtencionesEnfermeria" collection
 * @method Internado           setListasDieta()                         Sets the current record's "ListasDieta" collection
 * @method Internado           setSolicitudesTransfusionSanguinea()     Sets the current record's "SolicitudesTransfusionSanguinea" collection
 * @method Internado           setInformesEstadisticoAdmEgreso()        Sets the current record's "InformesEstadisticoAdmEgreso" collection
 * @method Internado           setPapeletasPedidoMaterial()             Sets the current record's "PapeletasPedidoMaterial" collection
 * @method Internado           setResumenAlta()                         Sets the current record's "ResumenAlta" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInternado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('internado');
        $this->hasColumn('afiliado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('noAfiliado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('categoria_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('cama_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('medico_consulta_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('medico_referencia_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('formulario_referencia', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('diagnostico', 'string', 10000, array(
             'type' => 'string',
             'length' => 10000,
             ));
        $this->hasColumn('procedencia', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('medio_referencia', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('observaciones', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             'notnull' => false,
             ));
        $this->hasColumn('conducto', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('es_afiliado', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('alta', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('altaFecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('altaHora', 'time', null, array(
             'type' => 'time',
             'notnull' => true,
             ));
        $this->hasColumn('diagnostico_alta', 'string', 1000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1000,
             ));
        $this->hasColumn('tratamientio', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('lugar_referencia_salida', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('medio_referencia_salida', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('motivo_refe_retorno', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Afiliado', array(
             'local' => 'afiliado_id',
             'foreign' => 'id'));

        $this->hasOne('PacienteOtroseguro', array(
             'local' => 'noAfiliado_id',
             'foreign' => 'id'));

        $this->hasMany('OrdenMedica', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('JuntaMedica', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('ExamenFisicoRecienNacido', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SolicitudInterconsulta', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SolicitudServicio', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SolicitudReposicionMaterial', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SignosVitalesNursery', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('NotasEnfermeria', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('NotasEvolucion', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasOne('Cama', array(
             'local' => 'cama_id',
             'foreign' => 'id'));

        $this->hasMany('AutorizacionDiagnosticoTratamiento as AutorizacionesTratamiento', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('AutorizacionAltaSolicitada as AutorizacionesAltaSolicitada', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('AutorizacionAutopsia as AutorizacionesAutopsia', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('ProgramacionCirugia as ProgramacionesCirugia', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SolicitudExamenLaboratorioClinico as SolicitudesExamenLaboratorioClinico', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('AdministracionMedicamento as AdministracionesMedicamento', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('UsoHospitalario as ResumenesAlta', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('AtencionEnfermeria as AtencionesEnfermeria', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('ListaDieta as ListasDieta', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('SolicitudTransfusionSanguinea as SolicitudesTransfusionSanguinea', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('InformeEstadisticoAdmEgreso as InformesEstadisticoAdmEgreso', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('PapeletaPedidoMaterial as PapeletasPedidoMaterial', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $this->hasMany('ResumenAlta', array(
             'local' => 'id',
             'foreign' => 'internado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}