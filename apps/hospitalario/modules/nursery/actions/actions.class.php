<?php

require_once dirname(__FILE__).'/../lib/nurseryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/nurseryGeneratorHelper.class.php';

/**
 * nursery actions.
 *
 * @package    hcps
 * @subpackage nursery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nurseryActions extends autoNurseryActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->signos_vitales_nursery = $this->form->getObject();
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
