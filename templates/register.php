<?php $this->title = "Inscription"; ?>

<form method="post" action="../public/index.php?route=register">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <br>
        <input class="form-control"type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>">
        <br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password">Mot de passe</label>
        <br>
        <input class="form-control"type="password" id="password" name="password">
        <br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        <label for="confirm-password">Encore une fois..</label>
        <input class="form-control" type="password" id="confirm_password" name="confirm_password">
        <br>
        <input class="btn btn-primary" type="submit" value="Inscription" id="submit" name="submit">
    </div>
</form>
