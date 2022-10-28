<?php

use App\core\Database;

if (isset($_GET['query'])) : ?>
    <div class="w3-theme w3-panel w3-card-4 w3-round-large">
        <?= $_GET['query'] ?>
    </div>
    </div>
    <table class="w3-table-all w3-white">
        <?php foreach (Database::query($_GET['query']) as $row) : ?>
            <tr>
                <?php $b = false; ?>
                <?php foreach ($row as $k => $v) : ?>
                    <?php if($b): ?>
                        <td><?= $v ?></td>
                    <?php endif ?>
                    <?php $b = !$b; ?>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="w3-content w3-padding">
    <?php endif ?>

    <div class="w3-panel w3-theme w3-round-xlarge">
        <form method="get">
            <textarea class="w3-input w3-panel w3-round-large" name="query" id="" cols="30" rows="10"></textarea>
            <div class="w3-center">
                <input class="w3-button w3-card w3-center w3-margin-bottom w3-white w3-round-large" type="submit" value="Esegui">
            </div>
        </form>
    </div>


    <?php

    use function App\core\showTable;

    showTable('blue', 'temi', ['id', 'colore']);
    showTable('blue', 'persone', ['id', 'nome', 'cognome', 'nascita']);
    showTable('blue', 'utenti', ['id', 'email', 'password', 'idTema', 'isAmministratore']);
    showTable('blue', 'modelliMacchine', ['id', 'marca', 'nome']);
    showTable('blue', 'macchine', ['id', 'colore', 'matricola', 'idModello']);
    showTable('blue', 'personaPossiedeMacchina', ['id', 'idPersona', 'idMacchina']);
    showTable('blue', 'abitazioni', ['id', 'idPersona', 'indirizzo', 'valore']);
    ?>