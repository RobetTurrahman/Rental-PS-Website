<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_admin.css">
</head>

<body>
    <section class="main">
        <div class="container2">
            <h1>RUANG INPUT DATA</h1>
            <div class="wrapper5">
                <div class="kotak_input">
                    <div class="jenis_input">
                        <h1>TAMBAH PLASTATION</h1>

                        <h3>Nama Playstation</h3>
                        <form action="<?= BASEURL; ?>/admin/input_data" method="post">
                        <div class="control form-group">
                            <input id="nama_ps" name="nama_ps" class="input is-hovered" type="text" placeholder="Contoh : Plastation H">
                        </div>

                        <h3>Jenis Playstation</h3>
                        <div class="dropdown form-group">
                            <div class="control">
                                <div class="select">
                                    <select class="form-control" name="id_jenis" id="id_jenis">
                                        <option value="1">Playstation 4</option>
                                        <option value="2">Playstation 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h3>Status</h3>
                        <div class="dropdown form-group">
                            <div class="control">
                                <div class="select">
                                    <select class="form-control" id="id_status" name="id_status">
                                        <option value="1">Tersedia</option>
                                        <option value="2">Disewakan</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="button-input">
                            <button class="button is-warning">Batalkan</button>
                            <button type="submit" class="button is-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
