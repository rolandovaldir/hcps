<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 
<br/>
<div class="tbl-bienvenida" style="margin-left: 15%;">
    <center><img  src="/images/bienvenida.png"></center>
    <h2 align="center">Bienvenido al sistema de hospitalizacion</h2>

    <table class="tbl-bienvenida" align="center">
        <tr>
            <th>Internado</th>
            <td><?php echo $internado->getNombreCompleto() ?></td>
        </tr>
        <tr>
            <th>Especialidad</th>
            <td><?php echo $internado->getTratamientio() ?></td>   
        </tr>
        <tr>
            <th>Cama</th>
            <td><?php echo $internado->Cama->getCodigo() ?></td>
        </tr>
        <tr>
            <th>Pieza</th>
            <td><?php echo $internado->Cama->Pieza ?></td>
        </tr>
        <tr>
            <th>Planta</th>
            <td><?php echo $internado->Cama->Pieza->Planta->getNombre() ?></td>
        </tr>
    </table>

    <center>Todos los registros que realize en este seccion seran relacionados con este internado</center>
</div>