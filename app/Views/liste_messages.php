<?= $this->extend('layout') ?>

<?= $this->section('contenu') ?>

<h1 class="titre">Liste des message de <?= $commune['NOM'] ?> </h1>
<p><a class="bouton" href='<?= url_to('message_ajout', 1) ?>'> Ajout message </a></p>
<p><a class="bouton" href='<?= url_to('visu_message', 1) ?>'> visualisation message </a></p>

<?php
$table = new \CodeIgniter\View\Table();

$table->setHeading('Titre', 'Contenu', 'Visibilité');

foreach ($messageListe as $message) {
    $table->addRow($message['TITRE'], $message['CONTENU']);
}

?>

<table>
    <tr>
        <th> Message </th>
        <th> Visibilité </th>
    </tr>

    <?php foreach ($messageListe as $message) { ?>
        <tr>
            <td> <?= $message['TITRE'] ?> </td>
            <td>
                <form method="post" action="#">
                    <?php if ($message['ON_OFF'] == 1) { ?>
                        <input type="radio" id="on" name="on_off" value="on" checked />
                        <label for="on">On</label>

                        <input type="radio" id="off" name="on_off" value="off" />
                        <label for="off">Off</label>
                    <?php } else { ?>
                        <input type="radio" id="on" name="on_off" value="on" />
                        <label for="on">On</label>

                        <input type="radio" id="off" name="on_off" value="off" checked />
                        <label for="off">Off</label>
                    <?php } ?>
                </form>
            </td>
            <td> <a class="bouton" href='<?= url_to('message_modif', $message['ID']) ?>'> Modifier </a> </td>
            <td> <a class="bouton" href='<?= url_to('visu_message', $message['ID']) ?>'> Visualisation </a> </td>
            <td> <a class="bouton" href='<?= url_to('message_delete') ?>'> Supprimer </a> </td>
        </tr>
    <?php } ?>
</table>

<?= $this->endSection() ?>