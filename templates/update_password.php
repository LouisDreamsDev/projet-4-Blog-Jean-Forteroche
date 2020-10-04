<?php $this->title = 'Modifier mot mot de passe'; ?>
<form method="post" action="../public/index.php?route=updatePassword">
    <p class="alert-info" role="alert">Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <div class="form-group">
        <label for="password">Mot de passe</label><br>
        <input class="form-control"type="password" id="password" name="password"><br>
        <input class="btn btn-primary" type="submit" value="Mettre à jour" id="submit" name="submit">
    </div>
</form>
