<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Liste des Catégories</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="mb-3">
        <a href="/categorie/ajout" class="btn btn-primary">Ajouter une catégorie</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Messages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $categorie) : ?>
                <tr>
                    <td><?= esc($categorie['nom']) ?></td>
                    <td><?= esc($categorie['description']) ?></td>
                    <td>
                        <a href="/categorie/messages/<?= $categorie['id'] ?>" class="btn btn-info btn-sm">
                            Voir les messages
                        </a>
                    </td>
                    <td>
                        <a href="/categorie/modifier/<?= $categorie['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="/categorie/supprimer/<?= $categorie['id'] ?>" class="btn btn-danger btn-sm" 
                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
                            Supprimer
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>