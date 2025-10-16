<?= $this->extend('layout') ?>

<?= $this->section('contenu') ?>
    <a href="<?=url_to('preCreate_user',$idCommune)?>" class='bouton'>Ajouter un Utilisateur</a>
    <?php
            //dd($listeUtilisateurs);
            $table = new \CodeIgniter\View\Table();
            $table->setHeading('nom', 'prenom',"modifier","supprimer");
            foreach ($listeUtilisateurs as $utilisateur) {
                $table->addRow([
                    $utilisateur['nom'],
                    $utilisateur['prenom'], 
                    '<a href="'.url_to('preUpdate_user', $utilisateur['id']).'" class=\'bouton\'>modifierUtilisateur</a>',
                    '<form method="post" action="'.url_to('delete_user',$utilisateur['id']).'"> <button type="submit" name="delete" onclick= "'. "return confirm('Are you sure?')".'"> Supprimer </button> </form>'
                ]);
            }
            echo $table->generate();

            ?>
<?= $this->endSection() ?>