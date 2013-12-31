<?php
$esHistorial = get_slot('historial',false) ? '&historial=1' : '';
use_helper('JavascriptBase'); 
$aux_internado_id = sfContext::getInstance()->getRequest()->getParameter('id');
$link_menus = array(
    array('link'=>'administracion_medicamento','label'=>'Administracion Medicamento'),
    array('link'=>'atencion_enfermeria','label'=>'Atencion Enfermeria'),
    array('link'=>'autorizaciones_diagnostico_tratamiento','label'=>'Autorizacion Tratamientos'),
    array('link'=>'autorizaciones_alta_solicitada','label'=>'Autorizacion Alta Solicitada'),
    array('link'=>'autorizaciones_autopsia','label'=>'Autorizacion Autopsia'),
    array('link'=>'juntas_medicas','label'=>'Juntas Medicas'),
    array('link'=>'lista_dieta','label'=>'Lista Dieta'),
    array('link'=>'notas_enfermeria','label'=>'Notas Enfermeria'),
    array('link'=>'notas_evolucion','label'=>'Notas Evolucion'),
    array('link'=>'nursery','label'=>'Nursery'),
    array('link'=>'ordenes_medicas','label'=>'Ordenes Medicas'),
    array('link'=>'papeleta_pedido_material','label'=>'Papeleta Pedido Material'),
    array('link'=>'programacion_cirugia','label'=>'Programacion Cirugias'),
    array('link'=>'uso_hospitalario','label'=>'Receta Uso Hospitalario'),
    array('link'=>'recien_nacidos','label'=>'Recien Nacidos'),
    array('link'=>'reposicion_materiales','label'=>'Reposicion Materiales'),
//    array('link'=>'resumenalta','label'=>'Resumen Alta'),
    array('link'=>'servicios_mantenimiento','label'=>'Servicio Mantenimiento'),
    array('link'=>'solicitudes_interconsultas','label'=>'Solicitudes Interconsultas'),
    array('link'=>'solicitudes_servicios','label'=>'Solicitudes Servicios'),
    array('link'=>'solicitudes_examen_laboratorio','label'=>'Solicitudes Examen Laboratorio'),
    array('link'=>'solicitudes_transfusion_sanguinea','label'=>'Solicitudes Transfusiones')
    
);

foreach ($link_menus as $val){ ?>    
    <?php //if (get_slot('historial',false))?>
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