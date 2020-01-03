<!DOCTYPE html>
<html>
<head>
    <!-- balises meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="développeurs de marcon.">
    <title>Connexion - <?= $title ?> </title>
    <link rel="stylesheet" href="/connexion/public/assets/css/bootstrap.min.css">
    <link href="/connexion/public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/connexion/public/assets/css/index.css">
    <link rel="stylesheet" href="/connexion/public/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/connexion/public/assets/css/animate.css">
    <link rel="stylesheet" href="/connexion/public/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/connexion/public/assets/css/magnific-popup.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/connexion/">
            <?php if(isset($title)): ?>
                <?= $title ?>
            <?php else: ?>
                Exercice
            <?endif;?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/connexion/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion/discussion">Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion/equipe">Notre equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "href="/connexion/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <?= $content; ?>

<footer class="nav navbar-nav ml-1">
    <div class="container mt-3 ">
        <div class="row mt-3 mb-3 text-dark">
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-5">
                <a href="">
                    <img src="" class="img-fluid" style="width:100px;" alt=""></a>
                <p class="small">&copy; Connexion <?php echo date('Y') ?>.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-4 ml-lg-auto">
                <ul class="nav navbar-nav ml-1 mt-5">
                    <li class="nav-item"><a href="#" class="nav-link text-muted">Terms of use</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-muted">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-4">
                <ul class="nav navbar-nav ml-1 mt-5">
                    <li class="nav-item"><a href="#" class="nav-link text-muted">Terms of use</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-muted">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-4">
                <ul class="nav navbar-nav ml-1 mt-5">
                    <li>
                        <a href="" class="media d-flex align-items-center nav-link">
                            <span class="d-flex mr-3">
                                <span class="fa fa-envelope"></span>
                            </span>
                            <span class="media-body">
                                Message
                            </span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="media d-flex align-items-center u-list__link" href="tel:+243">
                            <span class="d-flex mr-3">
                                <span class="fa fa-phone"></span>
                            </span>
                            <span class="media-body">
                                Téléphone
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row u-space-1">
            <div class="col-md-4 col-sm-6 mb-4 mb-lg-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="u-bg-transparent u-icon u-icon-secondary--air" href="https://twitter.com/Scott88512073">
                            <span class="fa fa-twitter u-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-bg-transparent u-icon u-icon-secondary--air" href="https://www.facebook.com/geissler.kasenda">
                            <span class="fa fa-facebook-f u-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-bg-transparent u-icon u-icon-secondary--air" href="https://www.linkedin.com/in/scott-tresor-1a3463177/">
                            <span class="fa fa-linkedin u-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-bg-transparent u-icon u-icon-secondary--air" href="https://github.com/Scott-Tresor">
                            <span class="fa fa-github u-icon__inner"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 col-sm-6 text-md-right">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="u-list__link" href="">Conditions d'utilisation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="/connexion/public/assets/js/jquery.js"></script>
<script src="/connexion/public/assets/js/popper.min.js"></script>
<script src="/connexion/public/assets/js/bootstrap.min.js"></script>
</body>
</html>

