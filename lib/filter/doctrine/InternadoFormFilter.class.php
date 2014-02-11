<?php

/**
 * Internado filter form.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InternadoFormFilter extends BaseInternadoFormFilter {

    public function configure() {
        parent::setup();

        $this->setWidget('matricula', new sfWidgetFormFilterInput(array('with_empty' => false)));
        $this->setValidator('matricula', new sfValidatorPass(array('required' => false)));
        
        $this->setWidget('empresa', new sfWidgetFormFilterInput(array('with_empty' => false)));
        $this->setValidator('empresa', new sfValidatorPass(array('required' => false)));
        
        $this->setWidget('nombre', new sfWidgetFormFilterInput(array('with_empty' => false)));
        $this->setValidator('nombre', new sfValidatorPass(array('required' => false)));
        
        $this->setWidget('paterno', new sfWidgetFormFilterInput(array('with_empty' => false)));
        $this->setValidator('paterno', new sfValidatorPass(array('required' => false)));
        
        $this->setWidget('materno', new sfWidgetFormFilterInput(array('with_empty' => false)));
        $this->setValidator('materno', new sfValidatorPass(array('required' => false)));
    }

    public function addMatriculaColumnQuery(Doctrine_Query $query, $field, $value) {
        $text = $value['text'];
        if ($text)
            $query->leftJoin($query->getRootAlias() . '.Afiliado amt')->andWhere('
                (amt.matricula LIKE ?)', "%$text%");
        return $query;
    }

    public function addNombreColumnQuery(Doctrine_Query $query, $field, $value) {
        $text = $value['text'];
        if ($text)
            $query->leftJoin($query->getRootAlias() . '.Afiliado an')
                  ->leftJoin($query->getRootAlias() . '.PacienteOtroseguro pn')
                  ->andWhere('(an.nombre LIKE ?
                               OR pn.nombre LIKE ?)', array("%$text%", "%$text%"));
        return $query;
//        
    }

    public function addPaternoColumnQuery(Doctrine_Query $query, $field, $value) {
        $text = $value['text'];
        if ($text)
            $query->leftJoin($query->getRootAlias() . '.Afiliado ap')
                  ->leftJoin($query->getRootAlias() . '.PacienteOtroseguro pp')
                  ->andWhere('(ap.paterno LIKE ?
                               OR pp.paterno LIKE ?)', array("%$text%","%$text%"));
        return $query;
    }
    public function addMaternoColumnQuery(Doctrine_Query $query, $field, $value) {
        $text = $value['text'];
        if ($text)
            $query->leftJoin($query->getRootAlias() . '.Afiliado am')
                  ->leftJoin($query->getRootAlias() . '.PacienteOtroseguro pm')
                  ->andWhere('(am.materno LIKE ?
                               OR pm.materno LIKE ?)', array("%$text%", "%$text%"));
        return $query;
    }
    
    public function addEmpresaColumnQuery(Doctrine_Query $query, $field, $value) {
        $text = $value['text'];
        if ($text)
            $query->leftJoin($query->getRootAlias() . '.Afiliado ae')->andWhere('
                (ae.empresa LIKE ?)', "%$text%");
        return $query;
    }

    public function getFields() {
        $fields = parent::getFields();
        $fields['matricula'] = 'custom';
        $fields['empresa']   = 'custom';
        $fields['nombre']    = 'custom';
        $fields['paterno']   = 'custom';
        $fields['materno']   = 'custom';
        return $fields;
    }

}
