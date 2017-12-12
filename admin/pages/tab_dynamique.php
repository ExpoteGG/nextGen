<h2>Tableau dynamique des chambres</h2>

<?php
$obj = new Vue_chambresDB($cnx);
$liste = $obj->getVue_chambres();
$nbrG = count($liste);
//var_dump($liste);
?>

<table class="table-responsive table table-striped table-hover">
    <tr>
        <th class="ecart">Id</th>
        <th class="ecart">Nom</th>
        <th class="ecart">Description</th>
        <th class="ecart">Place</th>
        <th class="ecart">Date</th>
        <th class="ecart">Prix</th>
    </tr>
    <?php
    for ($i = 0; $i < $nbrG; $i++) {
        ?>
        <tr>
            <td class="ecart"><?php print $liste[$i]['id_chambre']; ?></td>
            <td class="ecart"><?php print ($liste[$i]['nom']); ?></td>
            <td>
                <span contenteditable="true" name="desc_gateau" class="ecart" id="<?php print $liste[$i]['id_chambre']; ?>">
                    <?php print ($liste[$i]['description']); ?>
                </span>
            </td>
            <td>
                <span contenteditable="true" name="place" class="ecart" id="<?php print $liste[$i]['place']; ?>">
                    <?php print $liste[$i]['place']; ?>
                </span>
            </td>
            <td>
                <span contenteditable="true" name="date" class="ecart" id="<?php print $liste[$i]['date']; ?>">
                    <?php print $liste[$i]['date']; ?>
                </span>
            </td>
            <td>
                <span contenteditable="true" name="prix" class="ecart" id="<?php print $liste[$i]['prix']; ?>">
                    <?php print $liste[$i]['prix']; ?>
                </span>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


