<?php
$ouvrages=find_alls_ouvrage();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>EDITION</th>
                <th>AUTEUR</th>
                <th>EXEMPLAIRE</th>
                <th>RAYON</th>
            </tr>
            <?php foreach ($ouvrages as $value):?>
                <tr>
                    <td><?php echo($value['id']) ?></td>
                    <td><?= $value['titre'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td><?= $value['edition'] ?></td>
                    <td><?= $value['auteur'] ?></td>
                    <td><?= $value['exemplaire'] ?></td>
                    <td><?= $value['rayon'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>