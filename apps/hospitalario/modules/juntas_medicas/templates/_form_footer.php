<?php
$q = Doctrine_Core::getTable('MedicoParticular')->selectMedicos($junta_medica->getId());
$medicos = $q->execute();
?>
<table width="50%">
    <tr>
        <th>NOMBRE</th>
    </tr>
    <tbody>
        <?php
        foreach ($medicos as $medico) {
            ?>
            <tr>
                <td><?php echo $medico->getNombre() ?></td>
                <td>
                    <ul class="sf_admin_td_actions">
                        <?php
                        $helper = new juntas_medicasGeneratorHelper();
//                        echo $helper->linkToEdit($medico, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',))
                        ?>
                        <?php // echo $helper->linkToDelete($medico, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',)) ?>
                    </ul>
                </td>
            </tr>
            <?php
        }
        ?>    
    </tbody>
</table>