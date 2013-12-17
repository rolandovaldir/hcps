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
      case 'time':
        return 'myWidgetFormDojoTime';
        break;
      case 'timestamp':
        return 'myWidgetFormDojoDateTime';
        break; 
      default:
        return parent::getWidgetClassForColumn($column); 
    }
  }
  
  public function getValidatorClassForColumn($column)
  {
    switch ($column->getDoctrineType())
    {
      case 'date':
        return 'myValidatorDojoDate';
        break;      
      case 'timestamp':
        return 'myValidatorDojoDateTime';
        break;      
      default:
        return parent::getValidatorClassForColumn($column) ;
    }
   
  }
  
}