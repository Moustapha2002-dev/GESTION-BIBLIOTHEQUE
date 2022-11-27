<?php
$prets=find_alls_prets();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>ID</th>
                <th>NOM ET PRENOM</th>
                <th>D'ATE EMPRUNT</th>
                <th>D'ATE RENDU PREVU</th>
                <th>D'ATE RENDU REEL</th>
                <th>OUVRAGE EMPRUNTER</th>
                <th>NOMBRE D'OUVRAGE EMPRUNTER</th>
            </tr>
            <?php foreach ($prets as $value):?>
                <tr>
                    <td><?php echo($value['id']) ?></td> 
                    <td><?= $value['nomP'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td>
                        <?php echo ($value['datee']) ?>
                    </td>
                    <td><?= $value['daterp'] ?></td>
                    <td><?= $value['daterr'] ?></td>
                    <td><?= $value['titre'] ?></td>
                    <td><?= $value['nbre'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>