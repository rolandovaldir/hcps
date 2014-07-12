<!DOCTYPE html>
<html xml:lang="es" lang="es">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />    
        <?php include_stylesheets() ?>
        <link rel="stylesheet" href="<?php echo public_path('js/dojo-1.9.1/dijit/themes/claro/claro.css'); ?>" media="screen" />    
        <?php include_javascripts() ?>    
        <script type="text/javascript" src="<?php echo public_path('js/dojo-1.9.1/dojo/dojo.js'); ?>" 
        data-dojo-config="has:{'dojo-firebug': true},parseOnLoad: true, async: 1" ></script>
        <script>
            require(["dojo", 'dojo/domReady!', "dijit/layout/BorderContainer", "dijit/layout/TabContainer", "dijit/layout/ContentPane", 'dijit/Dialog', 'dijit/layout/SplitContainer', 'dijit/layout/AccordionContainer', 'dijit/MenuItem', 'dojox/encoding/crypto/Blowfish', 'dijit/MenuBar'],
                    function() {                        
                        dojo.fadeOut({node: 'loading-page', onEnd: function(node) {
                                node.style.display = 'none';
                            }}).play();
                    }
            );
        </script>
    </head>
<?php use_helper('JavascriptBase'); ?>    
    <body class="claro" >
        <div id="loading-page" style="position:absolute;background-color: #ffffff;width: 100%;height: 100%;z-index: 99999;margin:0;padding: 20px;">Cargando ...</div>
        <div data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design: 'headline',id:'container1'" style="height: 100%;margin:auto;" >
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'top'" id="header-layout" style="padding:0;" >
                <table class="user-info">
                    <tr>
                        <td rowspan="5" style="width: 35%;">
                            <?php echo link_to(image_tag('logo_header.png', 'alt=cps'), 'internados/index') ?>
                        </td>   
                        <td rowspan="5" style="width: 55%;">
                            <?php $internado = $sf_user->getAttribute('internado'); ?>
                            <?php if (is_object($internado)): ?>                                
                                <table class="tbl-paciente">
                                    <tbody>
                                        <tr>
                                            <th>Matrícula</th>
                                            <th>Paciente</th>
                                            <th>Empresa</th>
                                            <th>Planta</th>
                                            <th>Pieza</th>
                                            <th>Cama</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $internado->Afiliado->getMatricula() ?>
                                            </td>
                                            <td>
                                                <?php echo $internado->getNombreCompleto();//$internado->Afiliado->getPaterno() . ' ' . $internado->Afiliado->getMaterno() . ' ' . $internado->Afiliado->getNombre() ?>
                                            </td>
                                            <td>
                                                <?php echo $internado->Afiliado->getEmpresa() ?>
                                            </td>
                                            <td>
                                                <?php echo $internado->Cama->Pieza->Planta->getNombre() ?>
                                            </td>
                                            <td>
                                                <?php echo $internado->Cama->Pieza->getNombre() ?>
                                            </td>
                                            <td>
                                                <?php echo $internado->Cama->getCodigo(); ?>
                                            </td>                                            
                                        </tr>
                                    </tbody>                                    
                                    <tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <div data-dojo-type="dijit/MenuBar">
                                                    <div data-dojo-type="dijit/MenuBarItem" style="background: url('<?php echo image_path('inicio.png') ?>') no-repeat center;width:22px;height:22px;"
                                                         data-dojo-props="onClick:function(){ window.location = '<?php echo url_for('internados/index') ?>'; },
                                                         title:'Volver a la lista de internados'">
                                                        &nbsp; &nbsp; &nbsp;
                                                    </div>
                                                    <div data-dojo-type="dijit/MenuBarItem"  
                                                         data-dojo-props="label:'Ver internaciones previas',
                                                         onClick:function(){ dijit.byId('panel_historial').show(); }" >
                                                    </div>
                                                    <?php if (has_slot('actual_internado')):?>
                                                    <div data-dojo-type="dijit/MenuBarItem"                                         
                                                         data-dojo-props="label:'Ver Internacion actual',
                                                         onClick:function(){ dojo.byId('loading-page').style.display='';dojo.fadeIn({node: 'loading-page'}).play(); window.location = '<?php echo url_for('internados/visitar?id=' . get_slot('actual_internado')) ?>'; }" >                                                        
                                                    </div>
                                                    <?php endif ?>                                                    
                                                </div>                                                
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            <?php else: ?>
                                <table style="margin-left: 15%;">
                                    <tr>
                                        <td>
                                            <b>Reportes de internación   </b>
                                        </td>
                                        <td style="padding-left: 10px;">
                                            <?php echo link_to(image_tag('inicio.png', 'alt=cps-inicio'), 'internados/index') ?>
                                        </td>
                                    </tr>
                                </table>
                            <?php endif; ?>
                        </td>
                        <td style="font-size: 11px">
                            <?php
                            $week_days = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
                            $months = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                            $year_now = date("Y");
                            $month_now = date("n");
                            $day_now = date("j");
                            $week_day_now = date("w");
                            $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
                            echo $date;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" style="font-size: 11px">Usuario:
                            <span>
                                <?php if ($sf_user->isAuthenticated() == true): ?>
                                    <?php if ($sf_user->getHcpsUser()) echo $sf_user->getHcpsUser()->getNombreCompleto(); ?>
                                    <?php else: echo 'Iniciar sesi&oacute;n!!!' ?>
                                    <?php endif; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" style="font-size: 11px">Especialidad:
                            <span>
                                <?php if ($sf_user->isAuthenticated() == true): ?>
                                    <?php echo $sf_user->getGuardUser()->getDescripcionTipo() ?>                                                                    
                                <?php else: echo 'Iniciar sesi&oacute;n!!!'; ?>
                                <?php endif; ?>
                            </span>
                            
                        </td>
                    </tr>
                    <tr><td><?php echo link_to('Salir','sfGuardAuth/Signout',array('title'=>'Cerrar sesión'))?></td></tr>
                    <tr><td>&nbsp;</td></tr> 
                </table> 
            </div>
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'leading',style:'padding:0;',splitter: false" >
                
                
                        <?php include '_side_menu.php' ?>
                    
                    
                   
            </div>
            <?php $auxColor = get_slot('historial',false) ? 'F3F3F3' : 'F9FFF9' ?>
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'center',style:'background-color:#<?php echo $auxColor ?>'" id="dojotheme-maincontainer" >
                <?php echo $sf_content; ?>
                <script type="dojo/method">      
                    var that = this;
                    that.hcpsLoader = {};
                    that.hcpsWeb = '<?php echo sfContext::getInstance()->getRequest()->getRelativeUrlRoot() ?>';
                    that.hcpsWebBase = '<?php echo sfContext::getInstance()->getRequest()->getUriPrefix() ?>';
                    that.hcpsLastPage = '';
                    that.watch("href", function(pro,val){
                    if (this.hcpsLoader.cancel){ this.hcpsLoader.cancel(); }
                    });
                    dojo.subscribe("/dojo/hashchange", function(hash,otro){
                    if (!hash || that.hcpsLastPage==hash){ return; }
                    that.set('content',that.loadingMessage);
                    that.hcpsLoader = dojo.xhrGet({
                    url: that.hcpsWeb + dojox.encoding.crypto.Blowfish.decrypt(hash,''),
                    load: function(data){ 
                    that.set('content',data);                            
                    that.hcpsLastPage = hash;
                    },
                    error: function(data){ that.set('content',"Error! Intente nuevamente."); }
                    });                    
                    });
                </script>
                <script type="dojo/method" event="onDownloadEnd">
                    //console.log(this.href);
                    var lenBase = this.hcpsWeb.length;
                    if (this.href.indexOf(this.hcpsWebBase + this.hcpsWeb)===0){
                    lenBase = (this.hcpsWebBase + this.hcpsWeb).length;
                    }
                    this.hcpsLastPage=dojox.encoding.crypto.Blowfish.encrypt(this.href.substring(lenBase),'');
                    dojo.hash( this.hcpsLastPage );
                </script>
            </div>          
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'bottom'" id="footer-layout" >              
                <b>&quot;Caja Petrolera de Salud&quot;</b>
                <br/> Unidad Nacional de Sistemas                
            </div>
        </div>
        <?php $array_historial = get_slot('historial_array', array()) ?>                
        <div data-dojo-type="dijit/Dialog" data-dojo-props="title: 'Historial de Internaciones'" id="panel_historial" >
        <?php if (empty($array_historial)): ?>
            <h3>No se tienen internaciones Previas para este paciente!</h3>
        <?php else: ?>
            <table class ="tbl-paciente">
                <thead>
                    <tr>
                        <th>Fecha Internacion</th>
                        <th>Diagnostico Ingreso</th>
                        <th>Diagnostico Alta</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($array_historial as $his): ?>
                    <tr>
                        <td><?php echo $his['fecha'] ?></td>
                        <td><?php echo $his['diagnostico'] ?></td>
                        <td><?php echo $his['diagnostico_alta'] ?></td>
                        <td><?php echo link_to('Ver','internados_alta/verHistorial?id=' . $his['id'], array('onClick'=>"dojo.byId('loading-page').style.display='';dojo.fadeIn({node: 'loading-page'}).play();") )?></td>
                    </tr>
                <?php endforeach ?>    
                </tbody>            
            </table>    
        <?php endif ?>    
            <div class="dijitDialogPaneActionBar" >
                <button data-dojo-type="dijit/form/Button" data-dojo-props="label:'Cerrar',type: 'submit'" ></button>
            </div>
        </div>
        <div id="panel_anular" data-dojo-type="dijit/Dialog" data-dojo-props="title: 'Anulación de registro',
             execute:function(ff){ var co = dijit.byId('dojotheme-maincontainer');
                 var val = dojo.query('textarea',this.get('containerNode'))[0].value;
                 if (val==''){ alert('Debe de indicar el motivo de la anulación!!'); return false; }
                 dojo.xhrPost({url:this._hcpAction, postData: this._hcpData + '&motivo_borrado=' + val + '&tipo_borrado=<?php echo BorradoConTipoMotivoBehavior::TIPO_ANULADO ?>',
                     load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} });
                 co.set('content',co.loadingMessage);
             }"  >
            <div class="dijitDialogPaneContentArea">
                <br/>Debe de indicar el motivo de la anulacion de este registro!!<br/><br/>
                <textarea name="motivo_borrado"></textarea><br/><br/>
            </div>
            
            <div class="dijitDialogPaneActionBar" >
                <button data-dojo-type="dijit/form/Button" data-dojo-props="label:'Anular Registro',type: 'submit'" ></button>
                <button data-dojo-type="dijit/form/Button" 
                        data-dojo-props="label:'Cancelar',onClick: function(){ dijit.byId('panel_anular').hide(); }" ></button>
            </div>
            <script type="dojo/method">
                this.iniciar = function (url, data){
                    dojo.query('textarea',this.get('containerNode'))[0].value = '';
                    this.show();
                    this._hcpAction = url;
                    this._hcpData = data;
                };                
            </script>
        </div>
        
        <div id="panel_suspender" data-dojo-type="dijit/Dialog" data-dojo-props="title: 'Suspencion',
             execute:function(ff){ var co = dijit.byId('dojotheme-maincontainer');
                 var val = dojo.query('textarea',this.get('containerNode'))[0].value;
                 if (val==''){ alert('Debe de indicar el motivo de la suspención!!'); return false; }
                 dojo.xhrPost({url:this._hcpAction, postData: this._hcpData + '&motivo_borrado=' + val + '&tipo_borrado=<?php echo BorradoConTipoMotivoBehavior::TIPO_SUSPENDIDO ?>',
                     load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} });
                 co.set('content',co.loadingMessage);
             }"  >
            <div class="dijitDialogPaneContentArea">
                <br/>Debe de indicar el motivo de la suspencion!!<br/><br/>
                <textarea name="motivo_anulacion"></textarea><br/><br/>
            </div>
            
            <div class="dijitDialogPaneActionBar" >
                <button data-dojo-type="dijit/form/Button" data-dojo-props="label:'Suspencion Registro',type: 'submit'" ></button>
                <button data-dojo-type="dijit/form/Button" 
                        data-dojo-props="label:'Cancelar',onClick: function(){ dijit.byId('panel_suspender').hide(); }" ></button>
            </div>
            <script type="dojo/method">
                this.iniciar = function (url, data){
                    dojo.query('textarea',this.get('containerNode'))[0].value = '';
                    this.show();
                    this._hcpAction = url;
                    this._hcpData = data;
                };                
            </script>
        </div>
        
    </body>   
</html>
