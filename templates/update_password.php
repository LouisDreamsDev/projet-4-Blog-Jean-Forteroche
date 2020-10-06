<?php $this->title = 'Modifier le mot de passe'; ?>
<form method="post" action="../public/index.php?route=updatePassword">
    <div class="form-group">

        <label for="pseudo">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" value="<?=$this->session->get('pseudo'); ?>"readonly>
        <label for="password">Mot de passe</label><br>
        <input class="form-control"type="password" id="password" name="password"><br>
        <p class="alert alert-danger" role="alert">Attention ! Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié !</p>
        <input class="btn btn-primary" type="submit" value="Mettre à jour" id="submit" name="submit">
    </div>
</form>

