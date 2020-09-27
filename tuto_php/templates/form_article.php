<?php
$route = isset($article) && $article->get_id() ? 'editArticle&articleId='.$article->get_id() : 'addArticle';

$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
$title = isset($article) && $article->get_title() ? htmlspecialchars($article->get_title()) : '';
$content = isset($article) && $article->get_content() ? htmlspecialchars($article->get_content()) : '';
$author = isset($article) && $article->get_author() ? htmlspecialchars($article->get_author()) : '';

?>

<div>
    <form action="../public/index.php?route=<?= $route; ?>" method="post">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= $title; ?>">
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        <br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= $content; ?></textarea>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author" value="<?= $author; ?>">
        <?= isset($errors['author']) ? $errors['author'] : ''; ?>
        <br>
        <input type="submit" id="submit" name="submit" value="<?= $submit; ?>"><br>
    </form>
    <br>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>