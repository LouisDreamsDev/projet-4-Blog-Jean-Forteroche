<?php $this->title = 'Article';?>
<h1>nouveau blog</h1>
<p>en construction</p>
<div>
    <h2><?= htmlspecialchars($article->get_title());?></h2></a>
    <p><?= htmlspecialchars($article->get_content());?></p>
    <p><?= htmlspecialchars($article->get_author());?></p>
    <em><?= htmlspecialchars($article->get_created_at());?></em>
</div>
<br>
<div id="actions">
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->get_id(); ?>">Modifier</a>
    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->get_id();?>">supprimer</a>
</div>
<br>

<a href="../public/index.php">Retour à l'accueil</a>

<div id="comments" class="text-left" style="margin-left:50px">
    <h2>- Ajouter un commentaire -</h2>
    <?php include('form_comment.php'); ?>
</div>

<div id="comments" class="text-left" style="margin-left:50px">
<h2>- Commentaires -</h2>
<?php 

foreach ($comments as $comment)
{
    ?>
    <h3> - <?= htmlspecialchars($comment->get_pseudo());?> - </h3>
    <h4><?= htmlspecialchars($comment->get_content());?></h4>

    <br>
    <em><?= htmlspecialchars($comment->get_created_at());?></em>
    <hr>
    <?php
    if ($comment->is_flag())
    {
        ?>
        <p>Ce commentaire a déjà été signalé</p>
        <?php
    }
    else
    {
        ?>
        <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->get_id(); ?>">Signaler</a></p>
        <?php
    }
    ?>
        <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->get_id(); ?>">Supprimer</a></p>
    <hr>
    <?php
}
?>
