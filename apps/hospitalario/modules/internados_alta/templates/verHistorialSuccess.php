<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 
<br/>
<h2>Bienvenido al sistema de hospitalizacion</h2>
<br/><br/>
<table>
    <tr><th>Internado</th><td><?php echo $internado->getNombreCompleto() ?></td>            </tr>
    <tr>    <th>Cama</th><td></td>            </tr>
    <tr>    <th>Especialidad</th><td></td>            </tr>
</table>

Todos los registros que realize en este seccion seran relacionados con este internado
