<?php

require_once dirname(__FILE__).'/../lib/servicios_mantenimientoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/servicios_mantenimientoGeneratorHelper.class.php';

/**
 * servicios_mantenimiento actions.
 *
 * @package    hcps
 * @subpackage servicios_mantenimiento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicios_mantenimientoActions extends autoServicios_mantenimientoActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->servicio_mantenimiento = $this->form->getObject();
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
