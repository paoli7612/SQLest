<?php

namespace App\core;

function view($name)
{
    return "views/$name.view.php";
}

function action($name)
{
    return "actions/$name.action.php";
}

function partial($name)
{
    return "partials/$name.partial.php";
}

function inc($path)
{
    require $path;
}

function slug($text)
{
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return $text;
}

function euro($value)
{
    return number_format($value, 2, ',', ' ');
}

function error($code)
{
    return partial("errors/$code");
}

function showTable($color, $table, $fields)
{ ?>
    <div class="w3-panel w3-<?= $color ?> w3-card-4 w3-round-large w3-padding">
        <h2 class="w3-center"><?= $table ?></h2>
        <table class="w3-table-all w3-white w3-card">
            <tr>
                <?php foreach ($fields as $field) : ?>
                    <th><?= $field ?></th>
                <?php endforeach ?>
            </tr>
            <?php foreach (Database::query("SELECT * FROM $table") as $persona) : ?>
                <tr>
                    <?php foreach ($fields as $field) : ?>
                        <td><?= $persona[$field] ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
<?php } 