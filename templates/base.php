<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <title><?= $title ?></title>
</head>
<body>
<header class="blog-header py-3">
    <div class="text-center">
        <a class="blog-header-logo text-dark" href="../public/index.php"><h1 id="main-title">Billet simple pour L'Alaska</h1></a>
        <p> - <em>Jean Forteroche</em> - </p>
    </div>
    <div class="text-center">
    <?php
    if ($this->session->get('pseudo')) {
        ?>
        <div class="container">
            <a href="../public/index.php?route=logout" class="btn btn-light border rounded">Déconnexion</a>
            <a href="../public/index.php?route=profile" class="btn btn-light border rounded">Profil</a>
        </div>
        <?php if($this->session->get('role') === 'admin') { ?>
            <a href="../public/index.php?route=administration" class="btn btn-light border rounded">Administration</a>
        <?php } ?>
        <a href="../public/index.php?route=addArticle" class="btn btn-light border rounded">Nouvel article</a>
        <?php
    } else {
        ?>
        <a href="../public/index.php?route=register" class="btn btn-light border rounded">Inscription</a>
        <a href="../public/index.php?route=login" class="btn btn-light border rounded">Connexion</a>
        <?php
    }
    ?>
    </div>
    <hr>
</header>
<div id="content">
    <?= $content ?>
</div>
</body>
</html>