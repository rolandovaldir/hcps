<?php

/**
 * DetalleMedicacionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DetalleMedicacionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DetalleMedicacionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DetalleMedicacion');
    }
    
    public static function selectDetalles($solicitud_id)
    {
        $q =  Doctrine_Query::create()
                ->from('DetalleMedicacion dm')
                ->leftJoin('dm.SolicitudInterconsulta si')
                ->where('dm.solicitud_interconsulta_id = ?', $solicitud_id)
                ->orderBy('dm.id ASC');
        return $q;
    }
    
}