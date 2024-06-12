<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>
    <section class="main">
        <h1>PROFIL</h1>
        <div class="container3">
            <div class="wrapper6">
                <img src="<?= BASEURL; ?>/img/profil.png" alt="">
                <div class="form-masuk">

                    <h3>Nama Pengguna</h3>
                    <div class="control">
                        <input class="input" type="text" value="<?= isset($_SESSION['nama_pengguna']) ? $_SESSION['nama_pengguna'] : ''; ?>" readonly>
                    </div>

                    <h3>Email</h3>
                    <div class="control">
                        <input class="input" type="text" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" readonly>
                    </div>

                    <h3>No. Whatsapp</h3>
                    <div class="control">
                        <input class="input" type="text" value="<?= isset($_SESSION['no_wa']) ? $_SESSION['no_wa'] : ''; ?>" readonly>
                    </div>

                    <h3>Kata Sandi</h3>
                    <div class="control">
                        <input class="input" type="text" value="<?= isset($_SESSION['sandi']) ? $_SESSION['sandi'] : ''; ?>" readonly>
                    </div>

                    <div class="button-masuk">
                        <a href="<?= BASEURL; ?>/user/edit_profil">
                            <button class="button is-fullwidth">Edit Profil</button>
                        </a>
                    </div>
                    <div class="button-masuk">
                        <a href="<?= BASEURL; ?>/user/logout">
                            <button class="button is-fullwidth">Logout</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>
