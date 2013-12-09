<?php

require_once dirname(__FILE__).'/../lib/recien_nacidosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/recien_nacidosGeneratorHelper.class.php';

/**
 * recien_nacidos actions.
 *
 * @package    hcps
 * @subpackage recien_nacidos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class recien_nacidosActions extends autoRecien_nacidosActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->examen_medico_recien_nacido = $this->form->getObject();
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
