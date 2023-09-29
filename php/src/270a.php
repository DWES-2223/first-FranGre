<?php
$competiciones = include "./atletes.php";
?>
<table>
    <tr>
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    <?php
    foreach ( $competiciones as $nombreCompeticion => $competicion ) {
        ?>
        <tr>
            <td><?= $nombreCompeticion ?></td>
            <?php
            foreach ( $competicion as $propiedades ) {
                ?>
                <td><?= $propiedades ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>

