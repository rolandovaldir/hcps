<?php

/**
 * reportes actions.
 *
 * @package    hcps
 * @subpackage reportes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reportesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
//    $this->forward('default', 'module');
//      $this->setLayout('layout'); 
//      $this->getResponse()->setSlot("nombre_completo_internado", "Reportes");
//      $this->getResponse()->setSlot("historial",true);
//      return sfView::SUCCESS;
      $this->getResponse()->setSlot("historial",true);
  }
}
