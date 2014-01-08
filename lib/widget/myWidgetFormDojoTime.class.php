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
class myWidgetFormDojoTime extends sfWidgetForm
{
  /**
   * Constructor.
   *
   * Available options:
   *
   *  * type: The widget type
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    $this->addOption('format', '%hour%:%minute%:%second%');
    $this->addOption('format_without_seconds', '%hour%:%minute%');
    $this->addOption('with_seconds', false);
    $this->addOption('can_be_empty', true);
    $this->addOption('empty_values', '');
  }

  /**
   * Renders the widget.
   *
   * @param  string $name        The element name
   * @param  string $value       The value displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    // convert value to an array
    $default = '';
    if (is_array($value) && array_key_exists('time', $value))  {
        $value = $value['time'];
    }
    if (is_array($value))
    {
      $value = 'T' . $value['hour'] . ':' . $value['minute'] . ($this->getOption('with_seconds') ? ':' . $value['second'] : '');
    }
    else
    {
      $value = ctype_digit($value) ? (integer) $value : strtotime($value);
      if (false === $value)
      {
        $value = $default;
      }
      else
      {
        // int cast required to get rid of leading zeros
        $value = 'T' . date('H:i' . ($this->getOption('with_seconds') ? ':s' : ''), $value);
      }
    }    
    $emptyValues = $this->getOption('empty_values');
    return $this->renderTag('input', array_merge(array('type' => 'input','data-dojo-type'=>'dijit/form/TimeTextBox', 'name' => $name, 'value' => $value, 'style'=>'width:7em;'), $attributes));
  }
}
