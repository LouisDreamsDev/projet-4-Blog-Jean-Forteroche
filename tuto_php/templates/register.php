<?php $this->title = 'Inscription'; ?>

<h1>nouveau blog</h1>
<p>en construction</p>

<div>
    <form action="../public/index.php?route=register" method="post">
        <label for="pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>">
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password">
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        <br>
        <input type="submit" name="submit" value="inscription">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>