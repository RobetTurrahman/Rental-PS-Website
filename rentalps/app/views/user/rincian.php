<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RINCIAN PEMBOOKINGAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>
    <section class="main">
        <h1>RINCIAN PEMBOOKINGAN</h1>
        <div class="container">
            <div class="wrapper3">
                <div class="data">
                    <h1>PEMBOOKINGAN <?= $data['rincian'][0]['nama_ps']; ?> SUKSES!</h1>
                    <h3>Pesanan anda telah dibuatkan dan berstatus <span class="pending"><?= $data['status_ord']; ?></span> dengan rincian sebagai berikut!</h3>
                    <h3><i>Tanggal <?= $data['rincian'][0]['tanggal']; ?></i></h3>
                    <div class="table-container1">
                        <table class="history">
                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Nama</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><?= $data['rincian'][0]['nama_pengguna']; ?></h2>
                                </td>
                            </tr>

                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Nama PS</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><?= $data['rincian'][0]['nama_ps']; ?></h2>
                                </td>
                            </tr>

                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Estimasi</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><?= $data['rincian'][0]['estimasi']; ?> jam</h2>
                                </td>
                            </tr>

                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Waktu Mulai</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><?= $data['rincian'][0]['waktu_mulai']; ?></h2>
                                </td>
                            </tr>

                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Total Biaya</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2>Rp <?= number_format($data['rincian'][0]['total_biaya'], 0, ',', '.'); ?></h2>
                                </td>
                            </tr>

                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Status</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><span class="pending"><?= $data['rincian'][0]['status_ps']; ?></span></h2>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h3><i>Keterangan : Jika anda belum di konfirmasi segera hubungi 089128562930</i></h3>
                    <a href="<?= BASEURL; ?>/user/history">
                        <button class="button is-active">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
