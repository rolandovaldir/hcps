<?php

class AnulableBehavior extends Doctrine_Template
{
  
    protected $_options = array(
        'name'          =>  'deleted_at',
        'type'          =>  'timestamp',
        'length'        =>  false,
        'options'       =>  array(
            'notnull' => false
        ),
        'hardDelete' => false
    );
    
     protected $_listener;
    
    public function setTableDefinition()
    {
        // BC to 1.0.X of SoftDelete behavior
        if ($this->_options['type'] == 'boolean') {
            $this->_options['length'] = 1;
            $this->_options['options'] = array('default' => false, 'notnull' => true);
        }
    
        $this->hasColumn($this->_options['name'], $this->_options['type'], $this->_options['length'], $this->_options['options']);

        $this->_listener = new AnulableBehaviorListener($this->_options);
        $this->addListener($this->_listener);
    }
    
    public function hardDelete($conn = null)
    {
        if ($conn === null) {
            $conn = $this->_table->getConnection();
        }
        $this->_listener->hardDelete(true);
        $result = $this->_invoker->delete();
        $this->_listener->hardDelete(false);
        return $result;
    }
}