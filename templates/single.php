<?php $this->title = 'Article'; ?>
<div class="card text-center">
    <div class="card-header">
        <h2><?= htmlspecialchars($article->getTitle());?></h2>
    </div>
    <div class="card-body">
        <p class="card-text"><?= htmlspecialchars($article->getContent());?></p>
    </div>
    <div class="card-footer text-muted">
        <em>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></em>
    </div>
    <?php
    if ($this->session->get('role') === 'admin')
    {
        ?>
        <div class="actions card-footer">
            <a class="btn btn-outline-info" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
            <a class="btn btn-danger" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
        </div>
    <?php
    }
    ?>
</div>
<br>
<div id="comments">
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p class="text-muted">Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <?php
        if($comment->isFlag()) {
            ?>
            <p class="alert alert-warning">Ce commentaire a déjà été signalé.</p>
            <?php
        } 
        else 
        {
            ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <br>
        <hr>
        <h3>Ajouter un commentaire</h3>
        <?php
        if ($this->session->get('pseudo')) 
        {
            include('form_comment.php');
        }
        else
        {
            echo '<em>vous devez être connecté pour poster un commentaire.</em>';
        }
    }
    ?>
</div>