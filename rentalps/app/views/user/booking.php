<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING PS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <section class="main">
        <h1>SILAHKAN KLIK PLAYSTATION YANG TERSEDIA</h1>
        <div class="container2">
            <?php
            $jenisHeaders = [];
            foreach ($data['psData'] as $ps) :
                $jenis = $ps['id_jenis'];
                if (!in_array($jenis, $jenisHeaders)) :
                    $jenisHeaders[] = $jenis;
            ?>
                    <h1><?= ($jenis == 1) ? 'PLAYSTATION 4' : 'PLAYSTATION 5'; ?></h1>
                <?php endif; ?>
                <div class="nama-ps">
                    <?php if ($ps['id_status'] == 1) : ?>
                        <a href="<?= BASEURL; ?>/user/isi_data/<?= $ps['id_ps'];?>">
                            <div class="wrapper4">
                                <img src="<?= BASEURL; ?>/img/check 1.png" alt="">
                                <h4>TERSEDIA</h4>
                                <h5><?= $ps['nama_ps']; ?></h5>
                            </div>
                        </a>
                    <?php else : ?>
                        <div class="wrapper4 not-available" data-message="Maaf, PlayStation ini sedang tidak tersedia untuk disewa.">
                            <img src="<?= BASEURL; ?>/img/forbidden 1.png" alt="">
                            <h4>DISEWAKAN</h4>
                            <h5><?= $ps['nama_ps']; ?></h5>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <script>
            $(document).ready(function() {
                $('.not-available').on('click', function() {
                    var message = $(this).data('message');
                    alert(message);
                });
            });
        </script>
    </section>
</body>

</html>
