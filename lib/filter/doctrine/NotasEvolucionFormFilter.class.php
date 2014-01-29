<?php

/**
 * NotasEvolucion filter form.
 *
 * @package    hcps
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NotasEvolucionFormFilter extends BaseNotasEvolucionFormFilter
{
  public function configure()
  {
  }
  
    public function getFields()
    {
        $fields = parent::getFields();
        $fields['internado_id'] = 'InternadoId';
        return $fields;
    }
    public function addInternadoIdQuery(Doctrine_Query $query, $field, $values)
    {   
        $alias = $query->getRootAlias();
        $fieldName = $this->getFieldName($field);
        if (is_array($values)){
            $query->innerJoin($alias . '.Internado ii')->addWhere('ii.alta = 0');
        }
        else {
            $query->addWhere($alias . '.' . $fieldName . ' = ? ' , $values);
        }
    }
}
