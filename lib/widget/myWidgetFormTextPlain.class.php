<?php


class myWidgetFormTextPlain extends sfWidgetForm
{
  /**
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
        $tag = 'span';
        if (array_key_exists('tag', $attributes)){
            $tag = $attributes['tag'];
            unset($attributes['tag']);
        }
        if ($tag!=''){ return $this->renderContentTag($tag, $value, $attributes); }
        return $value;            
    }
}