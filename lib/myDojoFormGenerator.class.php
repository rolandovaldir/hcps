<?php

/*
 * This file is NOT part of the symfony package.
 * 
 * 
 */

/**
 * myWidgetFormDojoDate represents an HTML input tag.
 * 
 * @subpackage widget
 * @version    1
 */
class myDojoFormGenerator extends sfDoctrineFormGenerator
{
  public function getWidgetClassForColumn($column)
  { 
    switch ($column->getDoctrineType())
    {
      case 'date':
        return 'myWidgetFormDojoDate';
        break;
      default:
        return parent::getWidgetClassForColumn($column); 
    }
  }
}