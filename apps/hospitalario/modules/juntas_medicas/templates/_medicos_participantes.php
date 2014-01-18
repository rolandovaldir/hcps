<?php
$q = Doctrine_Core::getTable('MedicoParticipante')->selectMedicos($form->getObject()->getId());
$medicos = $q->execute();
?>
<table width="100%" class="for-form">
    <tr>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>Cargo</th>
        <th>Acciones</th>
    </tr>
    <tbody>
        <?php
        foreach ($medicos as $medico) {
            ?>
            <tr>
                <td><?php echo $medico->getNombre() ?></td>
                <td><?php echo $medico->getEspecialidad() ?></td>
                <td><?php echo $medico->getCargo() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php
                        $helper = new juntas_medicasGeneratorHelper();
                        echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), 'medico_participante_edit', $medico, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;",'query_string'=>$extra_url_custom_id) ).'</li>';
                        //echo $helper->linkToEdit($medico, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',))
                        $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
                        echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), 'juntas_medicas/deleteMedico?' . $extra_url_custom_id , array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'id=" . $medico->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){  },error: function(error){ alert('Error interno!!');},handle: function(data){ co.set('content',data); } }); co.set('content',co.loadingMessage); } return false;") ).'</li>';
                        // echo $helper->linkToDelete($medico, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',)) ?>
                    </ul>
                </td>
            </tr>
            <?php
        }
        ?>    
    </tbody>
</table>