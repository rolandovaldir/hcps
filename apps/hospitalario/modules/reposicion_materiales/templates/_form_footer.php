<?php
$q = Doctrine_Core::getTable('DetalleMaterial')->selectDetalles($solicitud_reposicion_material->getId());
$materiales = $q->execute();
?>
<table width="100%">
    <tr>
        <th>CÓDIGO</th>
        <th>DESCRIPCIÓN DEL PRODUCTO</th>
        <th>UNIDAD</th>
        <th>SALDO ANTERIOR</th>
        <th>REPOSICIÓN SOLICITADA</th>
        <th>SALDO ACTUAL</th>
    </tr>
    <tbody>
        <?php
        foreach ($materiales as $material) {
            ?>
            <tr>
                <td><?php echo $material->getCodigo() ?></td>
                <td><?php echo $material->getDescripcion() ?></td>
                <td><?php echo $material->getUnidad() ?></td>
                <td><?php echo $material->getSaldoAnterior() ?></td>
                <td><?php echo $material->getReposicionSolicitada() ?></td>
                <td><?php echo $material->getSaldoActual() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php
                        $helper = new reposicion_materialesGeneratorHelper();
//                        echo $helper->linkToEdit($material, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',))
                        ?>
                        <?php // echo $helper->linkToDelete($material, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',)) ?>
                    </ul>
                </td>
            </tr>
            <?php
        }
        ?>    
    </tbody>
</table>