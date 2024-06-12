<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWA PS BAROKAH</title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/Group 112.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_admin.css">
</head>

<body>

    <body>
        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
            <div class="start">
                <img src="<?= BASEURL; ?>\img\Group 112.png" alt="">
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="?controller=admin&method=homepage">
                        HOMEPAGE
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            MANAGEMENT DATA
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="?controller=admin&method=management_akun">
                                AKUN
                            </a>
                            <a class="navbar-item" href="?controller=admin&method=management_order">
                                ORDER
                            </a>
                            <a class="navbar-item" href="?controller=admin&method=management_ketersediaan">
                                KETERSEDIAAN
                            </a>
                        </div>
                    </div>

                    <a class="navbar-item" href="?controller=admin&method=input_data">
                        INPUT DATA
                    </a>

                    <a class="navbar-item" href="<?= BASEURL; ?>/logout">
                        <button class="button is-danger">Logout</button>
                    </a>

                    <h2 class="navbar-item"> Hari ini Tanggal : <?= (new DateTime())->format('Y-m-d') ?> | Pukul <?= (new DateTime())->format('h:i:sa') ?></h2>
                </div>
            </div>
        </nav>

    </body>

</html>