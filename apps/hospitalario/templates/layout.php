<!DOCTYPE html>
<html xml:lang="en" lang="en">
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
        require(["dijit/layout/BorderContainer", "dijit/layout/TabContainer", "dijit/layout/ContentPane",'dijit/Dialog','dijit/layout/SplitContainer','dijit/layout/AccordionContainer','dijit/MenuItem']);        
    </script>
</head>
<body class="claro" >
    <div data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design: 'headline',id:'container1'" style="height: 100%;margin:auto;" >
        <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'top'" id="header-layout" >              
            <table class="user-info">
                <tr>
                    <td rowspan="3" style="width: 90%;">
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
          <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'leading',style:'padding:0;',splitter: true" >
              <div>
              <div data-dojo-type="dijit/layout/AccordionContainer" data-dojo-props="style:'min-width:200px;'" >
                  <?php include 'side_menu.php' ?>
              </div>
            </div>     
            </div>
          <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'center'" id="dojotheme-maincontainer" >
              <?php echo $sf_content; ?>              
          </div>          
          <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'bottom'" id="footer-layout" >              
              <b>&quot;Caja Petrolera de Salud&quot;</b>
              <br/> Unidad Nacional de Sistemas
          </div>
      </div>      
</body>   
</html>
