<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 

<div data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design: 'headline'" >
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'leading',style:'padding:0;',splitter: true" >
        <div>
            <div data-dojo-type="dijit/layout/AccordionContainer" data-dojo-props="style:'min-width:200px;'" >
                <?php include_partial('global/side_menu') ?>
            </div>
        </div>     
    </div>
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region: 'center'" id="dojotheme-maincontainer" >
    </div>    
    
</div>