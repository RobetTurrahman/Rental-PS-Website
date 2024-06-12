<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>
    <!-- Logo dan kata penyambutan -->
    <section class="banner">
        <div class="container1">
            <img src="<?= BASEURL; ?>/img/logoUtama.png" alt="">
        </div>
        <h1>
            HI <?= isset($_SESSION['nama_pengguna']) ? $_SESSION['nama_pengguna'] : ''; ?>.... <br>
            SELAMAT DATANG DI BAROKAH PS <br>
            WEBSITE PEMBOOKINGAN PS
        </h1>
    </section>

    <!-- fasilitas -->
    <section class="fasilitas">
        <div class="container2">
            <h1>FASILITAS</h1>

            <div class="grid-container">
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 114.png" alt="">
                </div>
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 115.png" alt="">
                </div>
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 116.png" alt="">
                </div>
                <div class="isi">
                    <p>PS 5</p>
                </div>
                <div class="isi">
                    <p>PS 4</p>
                </div>
                <div class="isi">
                    <p>TV LED</p>
                </div>
            </div>

            <div class="grid-container">
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 117.png" alt="">
                </div>
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 118.png" alt="">
                </div>
                <div class="img-fas">
                    <img src="<?= BASEURL; ?>/img/Group 119.png" alt="">
                </div>
                <div class="isi">
                    <p>FREE WIFI</p>
                </div>
                <div class="isi">
                    <p>AC</p>
                </div>
                <div class="isi">
                    <p>KAMAR MANDI</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Game -->
    <section class="game">
        <div class="container2">
            <h1>GAME</h1>

            <!-- baris pertama -->
            <div class="grid-container1">
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/Grand-Theft-Auto-V-PS4-Box-Art 1.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/god-of-war-4-day-one-edition.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/81HNE-+Y6WL.png" alt="">
                </div>
                <div class="isi">
                    <p>GRAND THEFT AUTO V</p>
                </div>
                <div class="isi">
                    <p>GOD OF WAR 4</p>
                </div>
                <div class="isi">
                    <p>TEKKEN 7</p>
                </div>
            </div>

            <!-- Baris Kedua -->
            <div class="grid-container1">
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/fifa2019.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/pes2019.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/FIFA-23-PS5-479x600-2.png" alt="">
                </div>
                <div class="isi">
                    <p>FIFA 2019</p>
                </div>
                <div class="isi">
                    <p>PES 2019</p>
                </div>
                <div class="isi">
                    <p>FIFA 23</p>
                </div>
            </div>

            <!-- Baris Ketiga -->
            <div class="grid-container1">
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/81ZRj39hdcL.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/COD-Modern-Warfare-2-PS5-473x600-1.png" alt="">
                </div>
                <div class="img-game">
                    <img src="<?= BASEURL; ?>/img/Last-of-Us-PS5-471x600-1.png" alt="">
                </div>
                <div class="isi">
                    <p>FIFA 2019</p>
                </div>
                <div class="isi">
                    <p>CALL OF DUTY</p>
                </div>
                <div class="isi">
                    <p>THE LAST OF US</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
