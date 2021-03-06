<?php

/**
 * MedicoParticipanteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MedicoParticipanteTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MedicoParticipanteTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MedicoParticipante');
    }
    
    public static function selectMedicos($junta_id)
    {
        
        $q = Doctrine_Query::create()
                    ->from('MedicoParticipante mp')
                    ->leftJoin('mp.JuntaMedica jm')
                    ->where('mp.junta_medica_id = ?', $junta_id)
                    ->orderBy('mp.id ASC');
        return $q;
    }
}