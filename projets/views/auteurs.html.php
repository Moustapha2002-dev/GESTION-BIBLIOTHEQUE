<?php
$auteurs=alls_auteurs();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFFESSION</th>
            </tr>
            <?php foreach ($auteurs as $value):?>
                <tr>
                    <td><?php echo($value['id']) ?></td> 
                    <td><?= $value['nom'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['profession'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>