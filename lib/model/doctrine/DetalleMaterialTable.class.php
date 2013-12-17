<?php

/**
 * DetalleMaterialTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DetalleMaterialTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DetalleMaterialTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DetalleMaterial');
    }
    
    public static function selectDetalles($solicitud_id)
    {
        
        $q = Doctrine_Query::create()
                    ->from('DetalleMaterial dm')
                    ->leftJoin('dm.SolicitudReposicionMaterial sm')
                    ->where('dm.solicitud_reposicion_material_id = ?', $solicitud_id)
                    ->orderBy('dm.id ASC');
        return $q;
    }
}
