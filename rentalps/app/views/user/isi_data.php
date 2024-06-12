<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <section class="main">
        <h1>MULAI BOOKING <?= $data['psData']['nama_ps']; ?></h1>
        <div class="container">
            <div class="wrapper5">
                <div class="form-booking">
                <form action="<?= BASEURL; ?>/user/isi_data/<?= $data['psData']['id_ps']; ?>" method="post">
                <h2>Hari ini Tanggal : <?= (new DateTime())->format('Y-m-d') ?> | Pukul <?= (new DateTime())->format('h:i:sa') ?></h2>
                <h3>Nama</h3>
                <!-- <input name="id_ps" id="id_ps" value="<?= $data['psData']['id_ps']; ?>"> -->
                    <div class="control">
                        <input value="<?= isset($_SESSION['nama_pengguna']) ? $_SESSION['nama_pengguna'] : ''; ?>" class="input is-hovered" type="text" placeholder="Masukan Nama Anda">
                    </div>
                    <h3>No.Telepon</h3>
                    <div class="control">
                        <input value="<?= isset($_SESSION['no_wa']) ? $_SESSION['no_wa'] : ''; ?>" class="input is-hovered" type="text" placeholder="Contoh : 08156372832972">
                    </div>
                    <h3>Estimasi</h3>
                    <div class="dropdown">
                        <div class="control">
                            <div class="select" >
                            <select id="estimasi" name="estimasi">
                                <option value="0" >Pilih Waktu</option>
                                <option value="1">1 Jam</option>
                                <option value="2">2 Jam</option>
                                <option value="3">3 Jam</option>
                                <option value="4">4 Jam</option>
                                <option value="5">5 Jam</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <h3>Waktu Mulai (Isi dengan Format 00.00)</h3>
                    <div class="control">
                        <input name="waktu_mulai" id="waktu_mulai" class="input is-hovered" type="text" placeholder="Contoh : 08.00">
                    </div>
                    <h3>Tanggal</h3>
                    <div class="control">
                        <input id="tanggal" name="tanggal" class="input is-hovered" type="date">
                    </div>
                </div>
                <div class="persetujuan">
                    <div class="ket">
                        <h4>Keterangan :</h4>
                        <h5>Apabila penyewa tidak melakukan pembayaran dengan tepat waktu atau lebih dari 5 menit setelah waktu yang ditentukan (waktu mulai) maka admin akan membatalkan pesanan.</h5>
                    </div>
                </div>
                <div class="persetujuan">
                <input id="perjanjian" name="perjanjian" class="perjanjian" type="checkbox">
                    <h5>Saya bersedia mengikuti persyaratan yang telah dintentukan sesuai dengan peraturan yang ada.</h5>
                </div>
                <div class="button-isi">
                    <button class="button is-warning">Batalkan</button>
                    <button type="submit" class="button is-primary">Booking Sekarang Juga</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function () {
        $("form").submit(function (event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
            success: function (response) {
                alert("Booking successful!");
                console.log("Ajax success:", response);
            },
            error: function (error) {
                alert("Error in booking. Please try again.");
                console.log("Ajax error:", error);
            }
                    });
                });
            });
    </script>


</body>
</html>
