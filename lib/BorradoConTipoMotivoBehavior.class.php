<?php

class BorradoConTipoMotivoBehavior extends Doctrine_Template
{
  
    const TIPO_ANULADO    = 'a';
    const TIPO_SUSPENDIDO = 's';
    
    
    protected $_options = array(
        'swname'        =>  'estado',
        'name'          =>  'motivo_estado',        
        'length'        =>  250,
        'options'       =>  array(
            'notnull' => false
        ),
        'hardDelete' => false
    );
    
     protected $_listener;
    
    public function setTableDefinition()
    {
     
        $this->hasColumn($this->_options['swname'], 'string', 1, array());
        $this->hasColumn($this->_options['name'], 'string', $this->_options['length'], $this->_options['options']);

        $this->_listener = new BorradoConTipoMotivoBehaviorListener($this->_options);
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