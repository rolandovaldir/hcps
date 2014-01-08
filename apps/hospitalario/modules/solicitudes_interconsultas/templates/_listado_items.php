<?php if (!$form->getObject()->isNew()): ?>
<?php $medicaciones = Doctrine_Core::getTable('DetalleMedicacion')->getAllDetalles($form->getObject()->getId()) ?>
<table width="100%" class="for-form">
    <tr>
        <th>MEDICACIÓN UTILIZADA</th>
        <th>DOSIS</th>
        <th>FECHA INICIO</th>        
        <th> </th>
    </tr>
    <tbody>
        <?php
        foreach ($medicaciones as $medicacion) {
            ?>
            <tr>
                <td><?php echo $medicacion->getMedicacionUtilizada() ?></td>
                <td><?php echo $medicacion->getDosis() ?></td>
                <td><?php echo $medicacion->getFechaInicio() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php                        
                        $helper = new solicitudes_interconsultasGeneratorHelper();                        
                        echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), 'detalle_medicacion_edit', $medicacion, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;",'query_string'=>$extra_url_custom_id) ).'</li>';
                        //echo $helper->linkToEdit($material, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',));
                        $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
                        echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), 'solicitudes_interconsultas/deleteItem?' . $extra_url_custom_id , array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'id=" . $medicacion->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){  },error: function(error){ alert('Error interno!!');},handle: function(data){ co.set('content',data); } }); co.set('content',co.loadingMessage); } return false;") ).'</li>';
                        //echo $helper->linkToDelete($material, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',));
                        ?>
                    </ul>
                </td>
            </tr>
            <?php
        }
        ?>    
    </tbody>
</table>
<br/>
<h2>Adicionar Medicacion</h2>
<?php endif ?>
<?php echo $form['medicacion']; ?>
<br/><br/>