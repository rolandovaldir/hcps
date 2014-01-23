<td>
  <ul class="sf_admin_td_actions">

    <?php echo '<li class="sf_admin_action_edit">' . link_to(__('Edit', array(), 'sf_admin'), $helper->getUrlForAction('edit'), $autorizacion_alta_solicitada, array('onclick'=>"dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;",'query_string'=>$extra_url_custom_id) ).'</li>'  ?>    

    <?php  
    $aux_form = new BaseForm(); 
    $aux_csrf_function = $aux_form->isCSRFProtected() ? '&' . $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : ''; 
    echo '<li class="sf_admin_action_delete">' . link_to(__('Delete', array(), 'sf_admin'), $helper->getUrlForAction('delete'), $autorizacion_alta_solicitada, array('onclick'=>"if(confirm('Are you sure?')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'sf_method=delete" . $aux_csrf_function . "',load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} }); co.set('content',co.loadingMessage); } return false;",'query_string'=>$extra_url_custom_id) ).'</li>' 
            
    ?>

    <li class="sf_admin_action_imprimir">
    <?php echo link_to(__('Imprimir', array(), 'messages'), 'autorizaciones_alta_solicitada/exportPdf?id='.$autorizacion_alta_solicitada->getId() . '&' . $extra_url_custom_id , array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>  
              
    </li>
  </ul>    
</td>