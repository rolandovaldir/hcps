<?php
$medicos = MedicoTable::getInstance()->createQuery('doc')
    ->select('doc.id,doc.nombrec')->execute()->toArray();
$choices = array(''=>'','MEDICOS'=>array(),'EMPLEADOS'=>array());
//print_r($medicos);
foreach ($medicos as $m){
    $choices['MEDICOS']['m' . $m['id']] = $m['nombrec'];
}
$empleados = EmpleadoTable::getInstance()->createQuery('emp')
    ->select('emp.id,emp.nombre,emp.apellido,emp.cargo')->execute()->toArray();
//print_r($empleados);
foreach ($empleados as $e){
    $choices['EMPLEADOS']['e' . $e['id']] = $e['nombre'] . $e['apellido'] . ' (' . $e['cargo'] . ')';
}
//echo $form->getObject()->getCustomTipoEmpleadoId();
$widget1 =  new sfWidgetFormChoice(array('choices'=>$choices));
?>
<div class="sf_admin_form_row sf_admin_text">
    <div>
        <label>Usuario</label>
        <div class="content">
            <?php echo $widget1->render('sf_guard_user[custom_tipo_empleado_id]', $form->getObject()->getCustomTipoEmpleadoId()) ?>
        </div>
    </div>
</div>
