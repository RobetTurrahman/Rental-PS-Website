<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWA PS BAROKAH</title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/Group 112.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>

    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="start">
                <img src="<?= BASEURL; ?>/img/Group 112.png" alt="">
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="?controller=user&method=homepage">
                        HOMEPAGE
                    </a>

                    <a class="navbar-item" href="?controller=user&method=booking">
                        BOOKING PS
                    </a>

                    <a class="navbar-item" href="?controller=user&method=history">
                        HISTORY
                    </a>

                    <a class="navbar-item" href="?controller=user&method=about">
                        TENTANG KAMI
                    </a>
                </div>

                <div class="end">
                    <a href="?controller=user&method=profil">
                        <img src="<?= BASEURL; ?>/img/iconprofil.png" alt="">
                    </a>
                </div>
            </div>
        </nav>

    </body>

</html>