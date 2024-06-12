<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']?></title>
    <link rel="icon" type="image/x-icon" href="user/img/Group 112.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_login.css">
</head>

<body>
    <section class="main">
        <div class="container3">
            <div class="wrapper6">
                <form class="" action="<?= BASEURL; ?>/login/daftar" method="post" autocomplete="off">
                    <div class="form-masuk">
                        <h1>DAFTAR</h1>
                        <h3>
                            <label for="">Nama Pengguna</label>
                        </h3>
                        <div class="control">
                            <input id="nama_pengguna" name="nama_pengguna" class="input is-hovered" type="text" placeholder="Masukan Nama Anda">
                        </div>
                        <h3>
                            <label for="">Email</label>
                        </h3>
                        <div class="control">
                            <input id="email" name="email" class="input is-hovered" type="email" placeholder="Contoh: barokah05@gmail.com">
                        </div>
                        <h3>
                            <label for="">No. Whatsapp</label>
                        </h3>
                        <div class="control">
                            <input id="no_wa" name="no_wa" class="input is-hovered" type="number" placeholder="Contoh: 085123456789">
                        </div>
                        <h3>
                            <label for="">Sandi</label>
                        </h3>
                        <div class="control">
                            <input id="sandi" name="sandi" class="input is-hovered" type="password" placeholder="Masukan sandi">
                        </div>
                        <h3>
                            <label for="ulangi_sandi">Ulangi Sandi</label>
                        </h3>
                        <div class="control">
                            <input class="input is-hovered" id="ulangi_sandi" name="ulangi_sandi" type="password" placeholder="Masukan Ulang Sandi Yang Anda Buat">
                        </div>           
                        <div class="button-masuk">
                            <button type="submit" name="" class="button is-fullwidth">Daftar</button>
                        </div>
                        <a href="?controller=login&method=masuk"><h5> Masuk Sekarang?</h5></a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
