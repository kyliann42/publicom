<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Ajouter une Catégorie</h2>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="/categorie/create" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la catégorie</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= old('nom') ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?= old('description') ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="/categories" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?= $this->endSection() ?>