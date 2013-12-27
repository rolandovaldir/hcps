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
        require(["dojo","dijit/layout/BorderContainer", "dijit/layout/TabContainer", "dijit/layout/ContentPane",'dijit/Dialog','dijit/layout/SplitContainer','dijit/layout/AccordionContainer','dijit/MenuItem'],
            function(){ dojo.fadeOut({ node: 'loading-page', onEnd: function(node){ node.style.display = 'none'; } }).play(); }
        );        
    </script>
</head>
<body class="claro" >
    <div id="loading-page" style="position:absolute;background-color: #ffffff;width: 100%;height: 100%;z-index: 99999;margin:0;padding: 20px;">Cargando ...</div>
    <div data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design: 'headline',id:'container1'" style="height: 100%;margin:auto;" >
        <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'top'" id="header-layout" >              
            <table class="user-info">
                <tr>
                    <td rowspan="3" style="width: 90%;">
                        <?php echo link_to(image_tag('logo_header.png', 'alt=cps' ), '/hospitalario.php/')?>
                    </td>    
                    <td style="font-size: 11px">
                    <?php $week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
                        $months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                        $year_now = date ("Y");
                        $month_now = date ("n");
                        $day_now = date ("j");
                        $week_day_now = date ("w");
                        $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
                        echo $date; ?>
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap" style="font-size: 11px">Usuario:
                        <span style="color: #025A8D; font-size: 11px; font-weight: bold">
                        <?php if($sf_user->isAuthenticated() == true): ?>
                            <?php if($sf_user->getProfile()->getMedicoId()) echo $sf_user->getProfile()->getMedico()->getNombrec(); ?>
                            <?php if($sf_user->getProfile()->getEmpleadoId()) echo $sf_user->getProfile()->getEmpleado()->getNombre(); ?>
                            <?php else: echo 'Iniciar sesi&oacute;n!!!' ?>
                        <?php endif; ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap" style="font-size: 11px">Especialidad:
                        <span style="color: #025A8D; font-size: 11px; font-weight: bold">
                        <?php if($sf_user->isAuthenticated() == true): ?>
                            <?php if($sf_user->getProfile()->getMedicoId()) echo $sf_user->getProfile()->getMedico()->getEspecialidad()->getNombre(); ?>
                            <?php if($sf_user->getProfile()->getEmpleadoId()) echo $sf_user->getProfile()->getEmpleado()->getProfesion(); ?>
                            <?php else: echo 'Iniciar sesi&oacute;n!!!' ?>
                        <?php endif; ?>
                        </span>
                    </td>
                </tr>
                </table>                        
        </div>
        
            <div data-dojo-type="dijit/layout/TabContainer" data-dojo-props="region: 'center'" >
                <div data-dojo-type="dijit/layout/ContentPane" title="Internados" id="main-container-tab1" data-dojo-props="selected:true">
                    <?php echo $sf_content; ?>              
                </div>
                <div data-dojo-type="dijit/layout/ContentPane" title="Pacientes Dados de alta" data-dojo-props="href:'<?php echo url_for("internados_alta/index") ?>'" >
                </div>
                
                <div data-dojo-type="dijit/layout/ContentPane" title="Reportes" data-dojo-props="href:''">
                    <a href="reportes/index">Reportes</a>
                </div>
            </div>            
        
          <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'bottom'" id="footer-layout" >              
              <b>&quot;Caja Petrolera de Salud&quot;</b>
              <br/> Unidad Nacional de Sistemas
          </div>
      </div>      
</body>   
</html>
