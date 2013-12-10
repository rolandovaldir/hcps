<?php

require_once dirname(__FILE__).'/../lib/notas_evolucionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/notas_evolucionGeneratorHelper.class.php';

/**
 * notas_evolucion actions.
 *
 * @package    hcps
 * @subpackage notas_evolucion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class notas_evolucionActions extends autoNotas_evolucionActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->notas_evolucion = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
}
