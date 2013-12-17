<?php

/*
 *
 */
class myValidatorDojoDate extends sfValidatorDate
{ 
  /**
   * Converts an array representing a date to a timestamp.
   *
   * The array can contains the following keys: year, month, day, hour, minute, second
   *
   * @param  array $value  An array of date elements
   *
   * @return int A timestamp
   */
  protected function convertDateArrayToString($value)
  {
    // all elements must be empty or a number
    if (isset($value['date']) && !preg_match('#^\d+(-|/)\d+(-|/)\d+$#', $value['date']) && !empty($value['date']))
    {
        throw new sfValidatorError($this, 'invalid date', array('value' => $value));
    }  
    if (isset($value['time']) && !preg_match('#^T?\d+[:]\d+([:]\d+)?$#', $value['time']) && !empty($value['time']))
    {
        throw new sfValidatorError($this, 'invalid time', array('value' => $value));
    }  
    

    // if one date value is empty, all others must be empty too    
    
    if (!isset($value['date']) || !$value['date'])
    {
        return $this->getEmptyValue();
    }

    if ($this->getOption('with_time'))
    {
      // if second is set, minute and hour must be set
      // if minute is set, hour must be set
      if (strlen(trim($value['time']))<5)
      {
        throw new sfValidatorError($this, 'invalid time', array('value' => $value));
      }

      $clean = trim($value['date']) . ' ' . trim(str_replace('T', '', $value['time']));      
    }
    else
    {
      $clean = $value['date']  . ' 00:00:00 ';
    }

    return $clean;
  }

}
