<?php

require_once dirname(__FILE__).'/../lib/ordenes_medicasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ordenes_medicasGeneratorHelper.class.php';

/**
 * ordenes_medicas actions.
 *
 * @package    hcps
 * @subpackage ordenes_medicas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ordenes_medicasActions extends autoOrdenes_medicasActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->orden_medica = $this->form->getObject();
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
