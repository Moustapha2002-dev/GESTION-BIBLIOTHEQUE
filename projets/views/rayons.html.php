<?php
$rayons=alls_rayons();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>ID</th>
                <th>RAYONS</th>
               
            </tr>
            <?php foreach ($rayons as $value):?>
                <tr>
                    <td><?php echo($value['id']) ?></td> 
                    <td><?= $value['rayon'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>