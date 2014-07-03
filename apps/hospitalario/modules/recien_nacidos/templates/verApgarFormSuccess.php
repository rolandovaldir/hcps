<?php use_stylesheet('show_info.css', 'first') ?>

<h2>Examen físico ordenes y evolución del recién nacido</h2>

<?php $apgar_1 = $recien_nacido->Apgar[0]; ?>

<table class="show-info">
    <tbody>
        <tr>
            <th>APGAR<br />(Índice)</th>
            <th>EXAMEN FÍSICO AL NACER</th>
            <th>EXAMEN FÍSICO AL EGRESAR</th>
        </tr>
        <tr>
            <th>APARIENCIA GENERAL<br />(Erupciones, hematomas, tono<br />muscular, color, nutrición edema)</th>
            <td><?php echo $apgar_1->getApariencia() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>PIEL<br />(Erupciones, hematomas,<br />ictericia, piodermias)</th>
            <td><?php echo $apgar_1->getPiel() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>CABEZA CUELLO<br />(Deformaciones, caput, cefalo<br />hemato, cráneo tabes, bocios)</th>
            <td><?php echo $apgar_1->getCabeza() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>OJOS<br />(Anomalías, conjuntivitis)</th>
            <td><?php echo $apgar_1->getOjos() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>Oídos, Nariz, Garganta<br />Labios, Encías, Paladar</th>
            <td><?php echo $apgar_1->getOidosNarizGarganta() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>TÓRAX<br />(Inclusive hipertrocia mamaria)</th>
            <td><?php echo $apgar_1->getTorax() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>PULMONES</th>
            <td><?php echo $apgar_1->getPulmones() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>CORAZÓN</th>
            <td><?php echo $apgar_1->getCorazon() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>ABDOMEN<br />(Inclusive el cordón)</th>
            <td><?php echo $apgar_1->getAbdomen() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>GENITALES<br />a) femeninos b) masculinos<br />(Descenso de testículos)</th>
            <td><?php echo $apgar_1->getGenitales() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>TORSO Y ESPINA</th>
            <td><?php echo $apgar_1->getTorsoEspina() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>EXTREMIDADES<br />(Inclusive clavículas y pulso<br />femoral)</th>
            <td><?php echo $apgar_1->getExtremidades() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>REFLEJOS<br />(De moro, prehensión succión, <br />de glución)</th>
            <td><?php echo $apgar_1->getReflejos() ?></td>
            <td></td>
        </tr>
        <tr>
            <th>ANO<br />(Inclusive exploración rectal)</th>
            <td><?php echo $apgar_1->getAno() ?></td>
            <td></td>
        </tr>
    </tbody>
</table>

<script type="text/javascript">
alert("asdasdasd");
$(document).ready(function()
{
alert("asdasdasd");
})
</script>

<li class="sf_admin_action_list">
    <?php echo link_to('Volver',
                       'recien_nacidos/index?internado_id='.$internado_id,
                       array('onclick' => "dijit.byId('dojotheme-maincontainer').set('href',this.href);return false;")) ?>
</li>