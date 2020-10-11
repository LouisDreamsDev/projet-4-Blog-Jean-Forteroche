<?php $this->title = "Editer un article"; ?>
<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <div id="add_article">
        <label for="title">Titre de l'article</label><br>
        <input class="form-control" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <input class="btn btn-primary"type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </div>
</form>

<script>
    tinymce.init({
    selector: 'textarea',
    height: 400,
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
    toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
    toolbar_mode: 'floating',
    branding: false
    });
</script>