<?php

require_once dirname(__FILE__).'/../lib/internados_altaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/internados_altaGeneratorHelper.class.php';

/**
 * internados_alta actions.
 *
 * @package    hcps
 * @subpackage internados_alta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class internados_altaActions extends autoInternados_altaActions
{
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['alta'] = true;
        return $filters;
    }
    
    public function executeVerHistorial(sfWebRequest $request)
    {
        $user = $this->getUser();
        $user-> setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');        
        $this->internado = $this->getRoute()->getObject();        
        $this->setLayout('layout');
        $this->getResponse()->setSlot("historial",true);
        
        $his = InternadoTable::getInstance()->createQuery('h')->select('h.id, h.fecha, h.diagnostico, h.diagnostico_alta')
            ->where( ($internado->getEsAfiliado() ? 'h.afiliado_id': 'h.noafiliado_id') . '=? and h.alta=1',$internado->getEsAfiliado() ? $internado->getAfiliadoId() : $internado->getNoafiliadoId())
            ->orderBy('h.fecha')->execute()->toArray();
        $this->getResponse()->setSlot("historial_array",$his);
        
        $act = InternadoTable::getInstance()->createQuery('h')->select('h.id')
            ->where( ($internado->getEsAfiliado() ? 'h.afiliado_id': 'h.noafiliado_id') . '=? and h.alta=0',$internado->getEsAfiliado() ? $internado->getAfiliadoId() : $internado->getNoafiliadoId())
            ->execute()->toArray();
        if (!empty($act)){ $this->getResponse()->setSlot("actual_internado",$act[0]['id']); }
    }
    
        
    
}
