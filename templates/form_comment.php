<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<div id="form_comment" class="form">
    <form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
        <label for="pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>">
        <br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="content">Message</label><br>
        <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
        <br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <br>
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </form>
    <br>
    <em>vous devez être connecté pour poster un commentaire.</em>
</div>