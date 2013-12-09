<?php
use_helper('JavascriptBase'); 
$aux_internado_id = sfContext::getInstance()->getRequest()->getParameter('id');
$link_menus = array(
    array('link'=>'administracionmedicamento','label'=>'Administracion Medicamento'),
    array('link'=>'atencionenfermeria','label'=>'Atencion Enfermeria'),
    array('link'=>'autorizaciondiagnosticotratamientos','label'=>'Autorizacion Tratamientos'),
    array('link'=>'autorizacionesaltasolicitada','label'=>'Autorizacion Alta Solicitada'),
    array('link'=>'autorizacionesautopsia','label'=>'Autorizacion Autopsia'),
    array('link'=>'recien_nacidos','label'=>'Examen Físico Recien Nacidos'),
    array('link'=>'juntas_medicas','label'=>'Juntas Medicas'),
    array('link'=>'listadieta','label'=>'Lista Dieta'),
    array('link'=>'notas_enfermeria','label'=>'Notas Enfermeria'),
    array('link'=>'notas_evolucion','label'=>'Notas Evolucion'),
    array('link'=>'nursery','label'=>'Nursery'),
    array('link'=>'ordenes_medicas','label'=>'Ordenes Medicas'),
    array('link'=>'papeletapedidomaterial','label'=>'Papeleta Pedido Material'),
    array('link'=>'programacioncirugias','label'=>'Programacion Cirugias'),
    array('link'=>'reposicion_materiales','label'=>'Reposicion Materiales'),
    array('link'=>'resumenalta','label'=>'Resumen Alta'),
    array('link'=>'servicios_mantenimiento','label'=>'Servicio Mantenimiento'),
    array('link'=>'solicitudes_interconsultas','label'=>'Soliciotudes Interconsultas'),
    array('link'=>'solicitudes_servicios','label'=>'Soliciotudes Servicios'),
    array('link'=>'solicitudexamenlaboratorio','label'=>'Solicitudes Examen Laboratorio'),
    array('link'=>'solicitudtransfusionsanguinea','label'=>'Soliciotudes Transfusiones'),
    array('link'=>'usohospitalario','label'=>'Uso Hospitalario')
);

foreach ($link_menus as $val){ ?>
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="title: '<?php echo $val['label'] ?>'" >
        <ul class="sf_admin_actions">            
            <li class="sf_admin_action_list">                
                <?php echo  link_to_function('Ver Listado', "dijit.byId('dojotheme-maincontainer').set('href','" . public_path($val['link'] . "/index?internado_id=" . $aux_internado_id) . "')") ?>
            </li>            
            <li class="sf_admin_action_new">
                <?php echo  link_to_function('Crear Nuevo', "dijit.byId('dojotheme-maincontainer').set('href','" . public_path($val['link'] . "/new") . "')") ?>
            </li>

        </ul>
    </div>
<?php
}