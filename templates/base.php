<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="https://cdn.tiny.cloud/1/q9wow4naw9k9n3ix7hxdynm64d59cgb7bzrwfhx6yg8n0ug4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <div class="text-muted d-flex justify-content-center">
                <h4 class="text-nowrap"><small><?= $this->title ?></small></h4>
            </div>
        
            <div class="container d-flex justify-content-end">
        <?php if($this->session->get('role') === 'admin') 
            { 
                ?>
                    <a href="../public/index.php?route=addArticle" class="btn btn-light border rounded">Nouvel article</a>
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
</header>
<div id="js-box">

</div>
<div id="content">
    <?= $content ?>
</div>
<footer class="sticky-bottom py-4 d-flex justify-content-around border-top">
    <div class="1">
        <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
        </ul>
    </div>
    <div class="2">
        <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
        </ul>
    </div>
    <div class="3">
        <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
        </ul>
    </div>
</footer>
</body>
</html>