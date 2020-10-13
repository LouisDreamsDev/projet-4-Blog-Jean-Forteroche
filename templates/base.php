<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="https://cdn.tiny.cloud/1/q9wow4naw9k9n3ix7hxdynm64d59cgb7bzrwfhx6yg8n0ug4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../public/script.js"></script>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <title><?= $title ?></title>
</head>
<body>
<header class="blog-header py-4">
    <div class="text-center">
        <a class="text-dark" href="../public/index.php"><h1 id="main-title">Billet simple pour L'Alaska</h1></a>
        <p> - <em>Jean Forteroche</em> - </p>
    </div>
    <?php
    if ($this->session->get('pseudo'))
    {
        ?>
        <div class="d-flex p-2 bd-highlight">
        <div class="container d-flex justify-content-start">
            <a href="../public/index.php?route=logout" class="btn btn-light border rounded">Déconnexion</a>
            <a href="../public/index.php?route=profile" class="btn btn-light border rounded">Profil</a>
        </div>
        <div class="container d-flex justify-content-end">
    <?php if($this->session->get('role') === 'admin') 
        { 
            ?>
                <a href="../public/index.php?route=addArticle" class="btn btn-light border rounded text-nowrap">Nouvel article</a>
                <a href="../public/index.php?route=administration" class="btn btn-light border rounded">Administration</a>
                <?php 
        } 
        ?>
        </div>
        <?php
    } 
    else 
    {
        ?>
        <div class="container d-flex justify-content-end mr-0">
            <a href="../public/index.php?route=login" class="btn btn-light border">Connexion</a>
            <a href="../public/index.php?route=register" class="btn btn-light border">Inscription</a>
        </div>
        <?php
    }
    ?>
    </div>
    <hr>
    <div class="text-muted d-flex justify-content-center">
        <h4 class="text-nowrap"><small><?= $this->title ?></small></h4>
    </div>
    <hr>
</header>
<div id="js-box">

</div>
<div id="content">
    <?= $content ?>
</div>
<hr>
<footer class="absolute-bottom">
    <div id="footer-part-1" class="container">
        <ul class="list-group row text-center">
            <li class="list-group-item"><a href="http://localhost/projet-4-Blog-Jean-Forteroche/public/index.php?route=article&articleId=10">Chapitre 1</a></li>
            <li class="list-group-item"><a href="http://localhost/projet-4-Blog-Jean-Forteroche/public/index.php?route=article&articleId=12">Chapitre 2</a></li>
            <li class="list-group-item"><a href="http://localhost/projet-4-Blog-Jean-Forteroche/public/index.php?route=article&articleId=13">Chapitre 3</a></li>
            <li class="list-group-item"><a href="http://localhost/projet-4-Blog-Jean-Forteroche/public/index.php?route=article&articleId=14">Chapitre 4</a></li>
        </ul>
    </div>
    <div id="footer-part-2" class="container">
        <ul class="list-group row text-center">
            <li class="col list-group-item list-group-item-info">Ce projet est réalisé dans le cadre de la formation Développeur Web Junior d'<a href="https://openclassrooms.com/fr/">OpenClassrooms</a>.</li>
            <li class="col list-group-item list-group-item-info">Tu es étudiant / mentor OC et a un conseil ou une question ? envoye moi un message sur le <a href="https://openclassrooms.workplace.com/profile.php?id=100034156524250">Workplace</a> !</li>
            <li class="col list-group-item list-group-item-info">Tu peux aussi m'envoyer un mail : <a href="mailto:hencore.dev@protonmail.com">hencore.dev@protonmail.com</a>.</li>
            <li class="col list-group-item list-group-item-info">Retrouve également ce projet sur <a href="https://github.com/henc0re/projet-4-Blog-Jean-Forteroche">github</a>.</li>
        </ul>
    </div>
</footer>
</body>
</html>