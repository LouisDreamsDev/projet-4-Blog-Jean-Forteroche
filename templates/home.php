<?php $this->title = 'Accueil'; ?>

<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<?php
foreach ($articles as $article)
{
    ?>
    <div class="jumbotron">
        <h1 class="card-header display-6"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?> </a></h1>
        <p class="lead"><?= substr($article->getContent(), 0, strpos($article->getContent(), ' ', 560)); ?>  ..</p>
        <p class="card-text"><small class="text-muted">Jean Forteroche</small></p>
        <a class="btn btn-primary card-link" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
    </div>
    <br>
    <?php
}
?>