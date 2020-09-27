<?php $this->title = 'Accueil';?>
<h1>nouveau blog</h1>
<p>en construction</p>
<?= $this->session->show('add_article');?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?php
if ($this->session->get('pseudo'))
{
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php
    if ($this->session->get('role') === 'admin')
    {
        ?>
        <a href="../public/index.php?route=administration">Administration</a>
        <?php
    }
}
else
{
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
    <?php
}
?>
<?php

foreach ($articles as $article)
{
    ?>
    <div id="article">
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->get_id());?>"><?= htmlspecialchars($article->get_title());?></a></h2>
        <p><?= htmlspecialchars($article->get_content());?></p>
        <p><?= htmlspecialchars($article->get_author());?></p>
        <em><strong>Créé le : </strong><?= htmlspecialchars($article->get_created_at());?></em>
        <div id="actions">
            <a href="../public/index.php?route=editArticle&articleId=<?= $article->get_id();?>">éditer</a>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->get_id();?>">supprimer</a>
    </div>
    </div>
    <br>
    <?php
}
?>
