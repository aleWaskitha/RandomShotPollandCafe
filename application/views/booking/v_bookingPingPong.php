<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Tempat Random Shot</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/css_booking.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div id="formBox">
        <div id="slideshowPingpong">
            <img src="<?= base_url('assets/images/bookPing1.jpg') ?>" id="image" width="70%">
        </div>
        <form action="<?php echo base_url().'booking/bookPingpong'; ?>" method="POST" id="formulirPingpong">
            <h1 id="judul">Booking Tempat</h1>
            <h2 id="subJudul">P i n g P o n g</h2> 
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
                    class="resForm" value="<?= set_value('noTelepon'); ?>"
                    placeholder="08....">
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
                        <option value="09.00">09.00</option>
                        <option value="10.00">10.00</option>
                        <option value="11.00">11.00</option>
                        <option value="12.00">12.00</option>
                        <option value="13.00">13.00</option>
                        <option value="14.00">14.00</option>
                        <option value="15.00">15.00</option>
                        <option value="16.00">16.00</option>
                        <option value="17.00">17.00</option>
                        <option value="18.00">18.00</option>
                        <option value="19.00">19.00</option>
                        <option value="20.00">20.00</option>
                        <option value="21.00">21.00</option>
                    </select>
                    <?php echo form_error('jamMulai', '<div class="error">', '</div>'); ?>
                    sampai
                    <select name="jamAkhir" class="waktuMeja" value="<?= set_value('jamAkhir'); ?>">
                        <option value="10.00">10.00</option>
                        <option value="11.00">11.00</option>
                        <option value="12.00">12.00</option>
                        <option value="13.00">13.00</option>
                        <option value="14.00">14.00</option>
                        <option value="15.00">15.00</option>
                        <option value="16.00">16.00</option>
                        <option value="17.00">17.00</option>
                        <option value="18.00">18.00</option>
                        <option value="19.00">19.00</option>
                        <option value="20.00">20.00</option>
                        <option value="21.00">21.00</option>
                        <option value="22.00">22.00</option>
                    </select>
                    <?php echo form_error('jamAkhir', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <label>Catatan Tambahan</label>
                    <textarea name="catatanTambahan" rows="5" cols="30" class="catatan"></textarea>
                </div>
                <button type="submit" id="buttonBooking">Booking Tempat</button> <br>
            </div>
        </form>
    </div>

    <script>
        let gambar = [
            "<?= base_url('assets/images/bookPing1.jpg') ?>",
            "<?= base_url('assets/images/bookPing2.jpg') ?>",
            "<?= base_url('assets/images/bookPing3.jpg') ?>",
            "<?= base_url('assets/images/bookPing4.jpg') ?>",
            "<?= base_url('assets/images/bookPing5.jpg') ?>"
        ];
        let index = 0;
        
        setInterval(function () {
        index = (index + 1) % gambar.length;
        document.getElementById("image").src = gambar[index];
        }, 2000);
    </script>
</body>
</html>