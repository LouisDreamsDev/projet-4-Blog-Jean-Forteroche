<?php $this->title = 'Mon profil'; ?>

<?= $this->session->show('update_password'); ?>
<div>
    <h2><?php if ($this->session->get('pseudo') === 'user0') echo 'Jean Forteroche'; ?></h2>
    <p>Rôle : <strong><?= $this->session->get('role'); ?></strong></p>
    <a class="btn btn-outline-secondary"href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a class="btn btn-danger"href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>
<br>