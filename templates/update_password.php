<?php $this->title = 'Modifier le mot de passe'; ?>
<form method="post" action="../public/index.php?route=updatePassword">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <br>
        <input type="text" class="form-control" name="pseudo" value="<?=$this->session->get('pseudo'); ?>"readonly>
        <br>
        <label for="current-password">Mot de passe actuel</label>
        <br>
        <input class="form-control"type="password" id="current-password" name="current-password">
        <br>
        <p class="alert alert-danger" role="alert">Attention ! Le mot de passe du compte <?= $this->session->get('pseudo'); ?> sera modifié !</p>
        <br>
        <label for="current-password">Nouvelle phrase de passe</label>
        <br>
        <input class="form-control"type="password" id="new-password" name="new-password">
        <br>
        <input class="form-control"type="password" id="confirm-password" name="confirm-password">
        <br>
        <input class="btn btn-primary" type="submit" value="Mettre à jour" id="submit" name="submit">
    </div>
</form>

