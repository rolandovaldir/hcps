<?php
$detalles = Doctrine_Core::getTable('DetalleUsoHospitalario')->getAllDetalles($form->getObject()->getId());
?>
<?php if (!$form->getObject()->isNew()): ?>
<table width="100%" class="for-form">
    <tr>
        <th>CÓDIGO C.B.M.</th>
        <th>DETALLE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
        <th>CANTIDAD</th>
        <th>UNIDAD</th>
        <th>CÓDIGO FARMACIA I.B.M.</th>
        <th> </th>
    </tr>
    <tbody>
        <?php
        foreach ($detalles as $det) {
            ?>
            <tr>
                <td><?php echo $det->getCodigoCbm() ?></td>
                <td><?php echo $det->getDetalle() ?></td>
                <td><?php echo $det->getCantidad() ?></td>
                <td><?php echo $det->getUnidad() ?></td>
                <td><?php echo $det->getCodFarmaciaIbm() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php                                           
                        echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), 'detalle_uso_hospitalario_edit', $det, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;",'query_string'=>$extra_url_custom_id) ).'</li>';
                        $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
                        echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), 'uso_hospitalario/deleteItem?' . $extra_url_custom_id , array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'id=" . $det->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){  },error: function(error){ alert('Error interno!!');},handle: function(data){ co.set('content',data); } }); co.set('content',co.loadingMessage); } return false;") ).'</li>';
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
<h2>Adicionar Item</h2>
<?php endif ?>
<?php echo $form['detalle']; ?>
<br/><br/>