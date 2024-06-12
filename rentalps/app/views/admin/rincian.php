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
        <h1>RUANG HISTORY</h1>
        <div class="container2">
            <div class="wrapper4">
                <h1>PEMBOOKINGAN PLASTASTION B SUKSES!</h1>
                <h3>Pesanan anda telah dibuatkan dan berstatus <span class="pending"><?= $data['bookingDetails']['status'] ?></span> dengan rincian sebagai berikut!</h3>
                <h3><i>Tanggal <?= $data['bookingDetails']['tanggal'] ?></i></h3>
                <div class="table-container2">
                    <table class="history">
                        <tr class="baris">
                            <td class="keterangan">
                                <h2>Kode Booking</h2>
                            </td>
                            <td class="titik2">
                                <h2>:</h2>
                            </td>
                            <td class="status">
                                <h2><?= $data['bookingDetails']['id_order'] ?></h2>
                            </td>
                        </tr>
                        <tr class="baris">
                            <td class="keterangan">
                                <h2>Nama</h2>
                            </td>
                            <td class="titik2">
                                <h2>:</h2>
                            </td>
                            <td class="status">
                                <h2><?= $data['bookingDetails']['nama'] ?></h2>
                            </td>
                        </tr>
                        <tr class="baris">

                        <tr class="baris">
                            <td class="keterangan">
                                <h2>Nama PS</h2>
                            </td>
                            <td class="titik2">
                                <h2>:</h2>
                            </td>
                            <td class="status">
                                <h2><?= $data['bookingDetails']['pilih_ps'] ?></h2>
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
                                <h2><?= $data['bookingDetails']['estimasi'] ?> jam</h2>
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
                                <h2><?= $data['bookingDetails']['waktu_mulai'] ?></h2>
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
                                <h2><?= $data['bookingDetails']['keterangan'] ?></h2>
                            </td>
                        </tr>
                        <td class="keterangan">
                            <h2>Status</h2>
                        </td>
                        <td class="titik2">
                            <h2>:</h2>
                        </td>
                        <td class="status">
                            <h2><span class="pending">Sukses</span></h2>
                        </td>
                        </tr>
                    </table>
                </div>
                <h3><i>Keterangan : Jika anda belum di konfirmasi segera hubungi 089128562930</i></h3>
                <div class="button-history1">
                    <a href="<?= BASEURL; ?>/admin/history">
                        <button class="button is-active">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
