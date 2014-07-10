<?php

require_once dirname(__FILE__).'/../lib/internadosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/internadosGeneratorHelper.class.php';

/**
 * internados actions.
 *
 * @package    hcps
 * @subpackage internados
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class internadosActions extends autoInternadosActions
{
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['alta'] = false;
        return $filters;
    }
    
    public function executeVisitar(sfWebRequest $request)
    {        
        $user = $this->getUser();
        $user->setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');        
        $this->internado = $this->getRoute()->getObject();        
        $this->setLayout('layout');                
        
        $his = InternadoTable::getInstance()->createQuery('h')->select('h.id, h.fecha, h.diagnostico, h.diagnostico_alta')
            ->where( ($internado->getEsAfiliado() ? 'h.afiliado_id': 'h.noafiliado_id') . '=? and h.alta=1',$internado->getEsAfiliado() ? $internado->getAfiliadoId() : $internado->getNoafiliadoId())
            ->orderBy('h.fecha')->execute()->toArray();
        $this->getResponse()->setSlot("historial_array",$his);        
    }       
    
    public function executeSecure(sfWebRequest $request)
    {
        return $this->renderText('<div id="sf_admin_container"><div class="error">Usted No tiene los permisos necesarios por una de las siguientes razones: <br/><ul><li>Usted no pertenece a el area del paciente que quiere ver</li><li>El registro que quiere editar/eliminar no fue creado por usted.</li></ul></div></div>');
    }
    
}
