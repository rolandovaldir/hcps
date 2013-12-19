<?php
$q = Doctrine_Core::getTable('DetalleMaterial')->selectDetalles($form->getObject()->getId());
$materiales = $q->execute();
?>
<table width="100%">
    <tr>
        <th>CÓDIGO</th>
        <th>DESCRIPCIÓN DEL PRODUCTO</th>
        <th>UNIDAD</th>
        <th>SALDO ANTERIOR</th>
        <th>REPOSICIÓN SOLICITADA</th>
        <th>SALDO ACTUAL</th>
        <th> </th>
    </tr>
    <tbody>
        <?php
        foreach ($materiales as $material) {
            ?>
            <tr>
                <td><?php echo $material->getCodigo() ?></td>
                <td><?php echo $material->getDescripcion() ?></td>
                <td><?php echo $material->getUnidad() ?></td>
                <td><?php echo $material->getSaldoAnterior() ?></td>
                <td><?php echo $material->getReposicionSolicitada() ?></td>
                <td><?php echo $material->getSaldoActual() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php                        
                        $helper = new reposicion_materialesGeneratorHelper();
                        echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), $helper->getUrlForAction('edit'), $material, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;") ).'</li>';
                        //echo $helper->linkToEdit($material, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',));
                        $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
                        echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), 'reposicion_materiales/deleteItem', array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); var href = co.href; dojo.xhrPost({url:this.href,handleAs: 'json', postData: 'id=" . $material->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){ if(!data.status){ alert('Error interno!!'); } },error: function(error){ alert('Error interno!!');},handle: function(){co.set('href',href);} }); co.set('content',co.loadingMessage); } return false;") ).'</li>';
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