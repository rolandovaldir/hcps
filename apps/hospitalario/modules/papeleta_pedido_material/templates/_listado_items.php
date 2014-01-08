<?php
$detalles = Doctrine_Core::getTable('DetallePapeletaPedidoMaterial')->getAllDetalles($form->getObject()->getId());
?>
<?php if (!$form->getObject()->isNew()): ?>
<table width="100%" class="for-form">
    <tr>
        <th>&nbsp;</th>
        <th>DETALLE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
        <th>&nbsp;</th>
        <th> </th>
    </tr>
    <tbody>
        <?php
        foreach ($detalles as $det) {
            ?>
            <tr>
                <td><?php echo $det->getColumna1() ?></td>
                <td><?php echo $det->getColumna2() ?></td>
                <td><?php echo $det->getColumna3() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php                                           
                        echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), 'detalle_papeleta_pedido_material_edit', $det, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;",'query_string'=>$extra_url_custom_id) ).'</li>';
                        $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
                        echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), 'papeleta_pedido_material/deleteItem?' . $extra_url_custom_id , array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'id=" . $det->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){  },error: function(error){ alert('Error interno!!');},handle: function(data){ co.set('content',data); } }); co.set('content',co.loadingMessage); } return false;") ).'</li>';
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
<h2>Adicionar Material</h2>
<?php endif ?>
<?php echo $form['detalle']; ?>
<br/><br/>