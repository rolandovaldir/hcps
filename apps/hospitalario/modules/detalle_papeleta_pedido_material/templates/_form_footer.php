<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <?php echo link_to(__('Back to list', array(), 'sf_admin'), 'papeleta_pedido_material/edit?id=' . $form->getObject()->getPapeletaPedidoMaterialId() . '&' . $extra_url_custom_id , array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;") ) ?>
    </li>
    <li class="sf_admin_action_delete">
        <?php  
            $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
            echo link_to(__('Delete', array(), 'sf_admin'), 'papeleta_pedido_material/deleteItem?' . $extra_url_custom_id , array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'id=" . $form->getObject()->getId(). "&sf_method=delete" . $aux_csrf_function . "',load:function(data){  },error: function(error){ alert('Error interno!!');},handle: function(data){ co.set('content',data); } }); co.set('content',co.loadingMessage); } return false;") ) 
        ?>
    </li>
</ul>
