<?php

class myUser extends sfGuardSecurityUser
{
    
    public function signIn($user, $remember = false, $con = null)
    {
        parent::signIn($user, $remember, $con);
        
        $tipo = '';   
        $ret = null;
        
        if ($this->getGuardUser()->getTipo()==sfGuardUserTable::HCPS_USER_TIPO_MEDICO ){
            $tipo = sfGuardUserTable::HCPS_USER_TIPO_MEDICO;
            $ret = MedicoTable::getInstance()->find($this->getGuardUser()->getEmpleadoId());
        }
        elseif($this->getGuardUser()->getTipo()==sfGuardUserTable::HCPS_USER_TIPO_EMPLEADO){
            $tipo = sfGuardUserTable::HCPS_USER_TIPO_EMPLEADO;
            $ret = EmpleadoTable::getInstance()->find($this->getGuardUser()->getEmpleadoId());
        }
        
        $camas = CamaTable::getInstance()->createQuery('cc')->select('cc.id')
            ->innerJoin('cc.Pieza pp')->addWhere('pp.planta_id=?', $this->getGuardUser()->getPlantaId())
            ->execute()->toArray();
        $camas_array = array();
        foreach ($camas as $ca){ 
            $camas_array[] = $ca['id'];
        }
        
        $this->setAttribute('hcps_tipo', $tipo, 'hcps');
        $this->setAttribute('hcps_user', $ret, 'hcps');
        $this->setAttribute('hcps_camas', $camas_array, 'hcps');
    }
    
    public function getHcpsUser()
    {
        $ret = null;
        if ($this->hasAttribute('hcps_user','hcps')){
            $ret = $this->getAttribute('hcps_user', null, 'hcps');
        }
        return $ret;
    }    
    
    
    public function checkPlantaAllowedByCamaId($idCama)
    {        
        $array = $this->getAttribute('hcps_camas', array(), 'hcps');
        return array_search($idCama, $array)===false ? false : true;
    }
}
