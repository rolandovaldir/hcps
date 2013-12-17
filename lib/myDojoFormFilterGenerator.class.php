<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Doctrine filter form generator.
 *
 * This class generates a Doctrine filter forms.
 *
 * @package    symfony
 * @subpackage generator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGenerator.class.php 27842 2010-02-10 19:42:03Z Kris.Wallsmith $
 */
class myDojoFormFilterGenerator extends sfDoctrineFormFilterGenerator
{
  
  /**
   * Returns a PHP string representing options to pass to a widget for a given column.
   *
   * @param  sfDoctrineColumn $column
   * @return string    The options to pass to the widget as a PHP string
   */
  public function getWidgetOptionsForColumn($column)
  {    
    switch ($column->getDoctrineType())
    {
      case 'date':
      case 'datetime':
      case 'timestamp':
        $options = array();
        $withEmpty = $column->isNotNull() && !$column->isForeignKey() ? array("'with_empty' => false") : array();  
        $options[] = "'from_date' => new myWidgetFormDojoDate(), 'to_date' => new myWidgetFormDojoDate()";
        $options = array_merge($options, $withEmpty);
        return count($options) ? sprintf('array(%s)', implode(', ', $options)) : '';
        break;
      default:
        return parent::getWidgetOptionsForColumn($column);
    }    
  }
  
}
