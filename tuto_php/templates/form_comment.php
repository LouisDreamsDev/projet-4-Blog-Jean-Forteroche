<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form action="../public/index.php?route=<?= $route ;?>&articleId=<?= htmlspecialchars($article->get_id()); ?>" method="post">
    <label for="pseudo">Pseudo</label>
    <br>
    <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>">
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
    <label for="content">Message</label>
    <textarea name="content" id="content"><?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?></textarea>
    <br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    <input type="submit" value="<?= $submit ?>" id="submit" name="submit">
</form>
