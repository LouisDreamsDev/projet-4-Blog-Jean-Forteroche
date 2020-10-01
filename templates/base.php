<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
</head>
<body>
<header>
    <a href="http://localhost/blog/public/index.php"><h1>Billet simple pour L'Alaska</h1></a>
    <p>par Jean Forteroche</p>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration">Administration</a>
    <?php } ?>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <?php
} else {
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
    <?php
}
?>
<h2><?= $this->title ?></h2>
</header>
<div id="content">
    <?= $content ?>
</div>
</body>
</html>