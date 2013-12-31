<?php

class myUser extends sfGuardSecurityUser
{
    
    public function getHcpsUser()
    {
        $ret = null;
        
        if ($this->getGuardUser()->getTipo()==sfGuardUserTable::HCPS_USER_TIPO_MEDICO ){
            $ret = MedicoTable::getInstance()->find($this->getGuardUser()->getEmpleadoId());
        }
        elseif($this->getGuardUser()->getTipo()==sfGuardUserTable::HCPS_USER_TIPO_ENFERMERA){
            $ret = EmpleadoTable::getInstance()->find($this->getGuardUser()->getEmpleadoId());
        }        
        return $ret;
    }    
    
}
