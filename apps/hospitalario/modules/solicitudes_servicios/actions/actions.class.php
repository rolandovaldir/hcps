<?php

require_once dirname(__FILE__).'/../lib/solicitudes_serviciosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/solicitudes_serviciosGeneratorHelper.class.php';

/**
 * solicitudes_servicios actions.
 *
 * @package    hcps
 * @subpackage solicitudes_servicios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class solicitudes_serviciosActions extends autoSolicitudes_serviciosActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->solicitud_servicio = $this->form->getObject();
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
