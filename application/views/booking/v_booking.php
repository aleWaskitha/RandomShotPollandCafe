<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Tempat Random Shot</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/css_booking.css') ?>">
</head>
<body>
    <div id="slideshow">
        <img src="<?= base_url('assets/images/img1.jpg') ?>" id="image" width="70%">
    </div>
    <form action="" method="POST" id="formulir">
        <h1>Booking Tempat</h1>
        <h2>Random Shot Pool and Cafe</h2> 
        <div id="booking">
            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="namaLengkap" 
                class="resForm" value="<?= set_value('namaLengkap'); ?>">
                <?php echo form_error('namaLengkap', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label>No Telepon</label>
                <input type="tel" name="noTelepon" 
                class="resForm" value="<?= set_value('noTelepon'); ?>">
                <?php echo form_error('noTelepon', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label>Tanggal</label>
                <input type="date" name="tanggal" 
                class="resForm" value="<?= set_value('tanggal'); ?>">
                <?php echo form_error('tanggal', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label>Waktu Booking</label> <br>
                <select name="jamMulai" class="waktuMeja">
                    <option value="9">09.00</option>
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                    <option value="17">17.00</option>
                    <option value="18">18.00</option>
                    <option value="19">19.00</option>
                    <option value="20">20.00</option>
                    <option value="21">21.00</option>
                </select>
                <?php echo form_error('jamMulai', '<div class="error">', '</div>'); ?>
                sampai
                <select name="jamAkhir" class="waktuMeja" value="<?= set_value('jamAkhir'); ?>">
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                    <option value="17">17.00</option>
                    <option value="18">18.00</option>
                    <option value="19">19.00</option>
                    <option value="20">20.00</option>
                    <option value="21">21.00</option>
                    <option value="22">22.00</option>
                </select>
                <?php echo form_error('jamAkhir', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label>Meja</label> <br>
                <select name="meja" class="waktuMeja" value="<?= set_value('jamAkhir'); ?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="5">5</option>
                </select>
                <?php echo form_error('jamAkhir', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label>Catatan Tambahan</label>
                <textarea name="catatanTambahan" rows="5" cols="30" class="catatan"></textarea>
            </div>
            <button type="submit">Booking Tempat</button> <br>
        </div>

    <script>
        let gambar = [
            "<?= base_url('assets/images/img1.jpg') ?>",
            "<?= base_url('assets/images/img2.jpg') ?>",
            "<?= base_url('assets/images/img3.jpg') ?>"
        ];
        let index = 0;

        setInterval(function () {
        index = (index + 1) % gambar.length;
        document.getElementById("image").src = gambar[index];
        }, 2000);
    </script>
</body>
</html>
