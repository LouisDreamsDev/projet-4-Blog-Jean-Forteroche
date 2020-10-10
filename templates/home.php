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
    <div class="card bg-light mb-3">
        <div class="card-header"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?> </a></div>
            <div class="card-body">
                <p class="card-text"><?= substr($article->getContent(), 0, strpos($article->getContent(), ' ', 560)); ?>  ..</p>
                <p class="card-text"><small class="text-muted">Jean Forteroche</small></p>
                <a class="btn btn-primary card-link" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
            </div>
        </div>
    </div>  
    <br>
    <?php
}
?>