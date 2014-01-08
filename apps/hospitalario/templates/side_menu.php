<?php
$esHistorial = get_slot('historial',false) ? '&historial=1' : '';
use_helper('JavascriptBase'); 
$aux_internado_id = $sf_request->getParameter('id');
$link_menus = array(
    array('link'=>'administracion_medicamento','label'=>'Administracion Medicamento', 'table'=>'AdministracionMedicamento'),
    array('link'=>'atencion_enfermeria','label'=>'Atencion Enfermeria', 'table'=>'AtencionEnfermeria'),
    array('link'=>'autorizaciones_diagnostico_tratamiento','label'=>'Autorizacion Tratamientos', 'table'=>'AutorizacionDiagnosticoTratamiento'),
    array('link'=>'autorizaciones_alta_solicitada','label'=>'Autorizacion Alta Solicitada', 'table'=>'AutorizacionAltaSolicitada'),
    array('link'=>'autorizaciones_autopsia','label'=>'Autorizacion Autopsia', 'table'=>'AutorizacionAutopsia'),
    array('link'=>'juntas_medicas','label'=>'Juntas Medicas', 'table'=>'JuntaMedica'),
    array('link'=>'lista_dieta','label'=>'Lista Dieta', 'table'=>'ListaDieta'),
    array('link'=>'notas_enfermeria','label'=>'Notas Enfermeria', 'table'=>'NotasEnfermeria'),
    array('link'=>'notas_evolucion','label'=>'Notas Evolucion', 'table'=>'NotasEvolucion'),
    array('link'=>'nursery','label'=>'Nursery'),
    array('link'=>'ordenes_medicas','label'=>'Ordenes Medicas', 'table'=>'OrdenMedica'),
    array('link'=>'papeleta_pedido_material','label'=>'Papeleta Pedido Material', 'table'=>'PapeletaPedidoMaterial'),
    array('link'=>'programacion_cirugia','label'=>'Programacion Cirugias', 'table'=>'ProgramacionCirugia'),
    array('link'=>'uso_hospitalario','label'=>'Receta Uso Hospitalario', 'table'=>'UsoHospitalario'),
    array('link'=>'recien_nacidos','label'=>'Recien Nacidos', 'table'=>'ExamenFisicoRecienNacido'),
    array('link'=>'reposicion_materiales','label'=>'Reposicion Materiales', 'table'=>'SolicitudReposicionMaterial'),
//    array('link'=>'resumenalta','label'=>'Resumen Alta'),
//    array('link'=>'servicios_mantenimiento','label'=>'Servicio Mantenimiento'),
    array('link'=>'solicitudes_interconsultas','label'=>'Solicitudes Interconsultas', 'table'=>'SolicitudInterconsulta'),
    array('link'=>'solicitudes_servicios','label'=>'Solicitudes Servicios', 'table'=>'SolicitudServicio'),
    array('link'=>'solicitudes_examen_laboratorio','label'=>'Solicitudes Examen Laboratorio', 'table'=>'SolicitudExamenLaboratorioClinico'),
    array('link'=>'solicitudes_transfusion_sanguinea','label'=>'Solicitudes Transfusiones', 'table'=>'SolicitudTransfusionSanguinea')
    
);

foreach ($link_menus as $val){ ?>    
    <?php 
        if (get_slot('historial',false) && array_key_exists('table', $val)){
            if ($sf_request->hasParameter('id')){
                if (Doctrine_Core::getTable($val['table'])->createQuery('t')->where('internado_id=?',$aux_internado_id)->count()<=0) continue;  
            }
        } 
    ?>
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="title: '<?php echo $val['label'] ?>'," >
        <ul class="side_menu_forms">            
            <li class="sf_admin_action_list">                
                <?php echo  link_to_function('Ver Listado', "dijit.byId('dojotheme-maincontainer').set('href','" . url_for($val['link'] . "/index?internado_id=" . $aux_internado_id . $esHistorial) . "')") ?>
            </li>            
            <?php if (!get_slot('historial',false)): ?>
            <li class="sf_admin_action_new">
                <?php echo  link_to_function('Crear Nuevo', "dijit.byId('dojotheme-maincontainer').set('href','" . url_for($val['link'] . "/new?internado_id=" . $aux_internado_id . $esHistorial) . "')") ?>
            </li>
            <?php endif ?>
        </ul>
    </div>
<?php
}