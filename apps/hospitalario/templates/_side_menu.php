<?php
$esHistorial = get_slot('historial',false) ? '&historial=1' : '';
use_helper('JavascriptBase'); 
$aux_internado_id = $sf_request->getParameter('id');
$link_menus = array(
    array('link'=>'administracion_medicamento','label'=>'Administracion Medicamento', 'table'=>'AdministracionMedicamento', 'credencial'=>'enfermera'),
    array('link'=>'atencion_enfermeria','label'=>'Atencion Enfermeria', 'table'=>'AtencionEnfermeria', 'credencial'=>'enfermera'),
    array('link'=>'autorizaciones_diagnostico_tratamiento','label'=>'Autorizacion Tratamientos', 'table'=>'AutorizacionDiagnosticoTratamiento', 'credencial'=>'ambos'),
    array('link'=>'autorizaciones_alta_solicitada','label'=>'Autorizacion Alta Solicitada', 'table'=>'AutorizacionAltaSolicitada', 'credencial'=>'ambos'),
    array('link'=>'autorizaciones_autopsia','label'=>'Autorizacion Autopsia', 'table'=>'AutorizacionAutopsia', 'credencial'=>'ambos'),
    array('link'=>'juntas_medicas','label'=>'Juntas Medicas', 'table'=>'JuntaMedica', 'credencial'=>'medico'),
    array('link'=>'lista_dieta','label'=>'Lista Dieta', 'table'=>'ListaDieta', 'credencial'=>'enfermera'),
    array('link'=>'notas_enfermeria','label'=>'Notas Enfermeria', 'table'=>'NotasEnfermeria', 'credencial'=>'enfermera'),
    array('link'=>'notas_evolucion','label'=>'Notas Evolucion', 'table'=>'NotasEvolucion', 'credencial'=>'enfermera'),
    array('link'=>'nursery','label'=>'Nursery', 'table'=>'SignosVitalesNursery', 'credencial'=>'enfermera'),
    array('link'=>'ordenes_medicas','label'=>'Ordenes Medicas', 'table'=>'OrdenMedica', 'credencial'=>'medico'),
    array('link'=>'papeleta_pedido_material','label'=>'Papeleta Pedido Material', 'table'=>'PapeletaPedidoMaterial', 'credencial'=>'enfermera'),
    array('link'=>'programacion_cirugia','label'=>'Programacion Cirugias', 'table'=>'ProgramacionCirugia', 'credencial'=>'medico'),
    array('link'=>'uso_hospitalario','label'=>'Receta Uso Hospitalario', 'table'=>'UsoHospitalario', 'credencial'=>'enfermera'),
    array('link'=>'recien_nacidos','label'=>'Recien Nacidos', 'table'=>'ExamenFisicoRecienNacido', 'credencial'=>'enfermera'),
    array('link'=>'reposicion_materiales','label'=>'Reposicion Materiales', 'table'=>'SolicitudReposicionMaterial', 'credencial'=>'enfermera'),
    array('link'=>'resumen_alta','label'=>'Resumen Alta', 'table'=>'ResumenAlta', 'credencial'=>'ambos'),
//    array('link'=>'servicios_mantenimiento','label'=>'Servicio Mantenimiento'),
    array('link'=>'solicitudes_interconsultas','label'=>'Solicitudes Interconsultas', 'table'=>'SolicitudInterconsulta', 'credencial'=>'medico'),
    array('link'=>'solicitudes_servicios','label'=>'Solicitudes Servicios', 'table'=>'SolicitudServicio', 'credencial'=>'medico'),
    array('link'=>'solicitudes_examen_laboratorio','label'=>'Solicitudes Examen Laboratorio', 'table'=>'SolicitudExamenLaboratorioClinico', 'credencial'=>'medico'),
    array('link'=>'solicitudes_transfusion_sanguinea','label'=>'Solicitudes Transfusiones', 'table'=>'SolicitudTransfusionSanguinea', 'credencial'=>'medico')
    
);
$para_agrupar = array('');

if ($sf_request->hasParameter('id')){
    $para_agrupar = array('medico'=>'Med. Asistencial', 'enfermera'=>'Enfermeria', 'ambos'=>'En General');
    ?>
<div data-dojo-type="dijit/layout/TabContainer" data-dojo-props="style:'width:290px;'" >    
<?php
}
foreach ($para_agrupar as $gru_cre=>$gru_tit){
    $aux_enddivs = '';
    if ($sf_request->hasParameter('id')){        
        ?>
        <div data-dojo-type="dijit/layout/ContentPane" title="<?php echo $gru_tit ?>"
             data-dojo-props="selected:true,'class':'containainer_background'">
             <div>
                 <div data-dojo-type="dijit/layout/AccordionContainer" data-dojo-props="style:'width:260px;'" >                     
                          
       <?php   
       $aux_enddivs = '</div>             </div>         </div>';
    }    
    foreach ($link_menus as $val){        
        if ($sf_request->hasParameter('id') && $gru_cre!= $val['credencial']){
            continue;
        }   
        if (get_slot('historial',false) && array_key_exists('table', $val)){
            if ($sf_request->hasParameter('id')){
                if (Doctrine_Core::getTable($val['table'])->createQuery('t')->where('internado_id=?',$aux_internado_id)->count()<=0) continue;  
            }
        } 
    ?>
        <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="title: '<?php echo $val['label'] ?>',style:'padding:2px;'" >
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
    echo $aux_enddivs;
}
if ($sf_request->hasParameter('id')){
    echo '</div>';
}