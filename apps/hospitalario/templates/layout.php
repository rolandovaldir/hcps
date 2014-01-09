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
            require(["dojo", 'dojo/hash', "dijit/layout/BorderContainer", "dijit/layout/TabContainer", "dijit/layout/ContentPane", 'dijit/Dialog', 'dijit/layout/SplitContainer', 'dijit/layout/AccordionContainer', 'dijit/MenuItem', 'dojox/encoding/crypto/Blowfish'],
                    function() {
                        dojo.fadeOut({node: 'loading-page', onEnd: function(node) {
                                node.style.display = 'none';
                            }}).play();
                    }
            );
        </script>
    </head>
    <body class="claro" >
        <div id="loading-page" style="position:absolute;background-color: #ffffff;width: 100%;height: 100%;z-index: 99999;margin:0;padding: 20px;">Cargando ...</div>
        <div data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design: 'headline',id:'container1'" style="height: 100%;margin:auto;" >
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'top'" id="header-layout" style="padding:8px 10px 2px;" >
                <table class="user-info">
                    <tr>
                        <td rowspan="3" style="width: 35%;">
                            <?php echo link_to(image_tag('logo_header.png', 'alt=cps'), 'internados/index') ?>
                        </td>   
                        <td rowspan="3" style="width: 55%;">
                            <?php if (has_slot('nombre_completo_internado')): ?>
                                <?php $internado = $sf_user->getAttribute('internado'); ?>
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
                                            <td style="padding-left: 10px;">
                                                <?php echo link_to(image_tag('inicio.png', 'alt=cps-inicio'), 'internados/index') ?>
                                            </td>
                                        </tr>
                                    </tbody>

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
                                    <?php echo $sf_user->getGuardUser()->getDescripcionTipo() ?><br/>
                                    <?php echo link_to('Salir','sfGuardAuth/Signout')?>                                
                                <?php else: echo 'Iniciar sesi&oacute;n!!!'; ?>
                                <?php endif; ?>
                            </span>
                            
                        </td>
                    </tr>
                </table> 
            </div>
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'leading',style:'padding:0;',splitter: true" >
                <div>
                    <div data-dojo-type="dijit/layout/AccordionContainer" data-dojo-props="style:'min-width:200px;'" >
                        <?php include '_side_menu.php' ?>
                    </div>
                </div>     
            </div>
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'center'" id="dojotheme-maincontainer" >
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
    </body>   
</html>
