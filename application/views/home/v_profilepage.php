<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil Saya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets/css/css_profile.css') ?>" rel="stylesheet">
</head>
<body>
<!-- bagian profile -->
<div class="container profile-container">
  <div class="row">
    <!-- sidebar -->
    <div class="col-md-3">
      <div class="sidebar">
        <h5><i class="bi bi-person-circle"></i> <?= $this->session->userdata('username') ?></h5>
        <hr class="text-secondary">
        <a class="nav-link active" href="<?= base_url('homepage/profilePage') ?>"><i class="bi bi-person"></i> Profile</a>
        <a class="nav-link" href="<?= base_url('homepage/historyBooking') ?>"><i class="bi bi-clock-history"></i> History Booking</a>
      </div>
    </div>

    <div class="col-md-9">
      <div class="profile-card">
        <h3 class="mb-3"><i class="bi bi-person-lines-fill"></i> My Profile</h3>
          <div class="mb-3">
            <label>Username: </label>
            <?= $users['Username']; ?>
          </div>
          <div class="mb-3">
            <label>Email: </label>
            <?= $users['Email']; ?>
          </div>
          <div class="mb-3">
            <label>Date Created: </label>
            <?= $users['date_created']; ?>
          </div>
          <div class="mb-3">
            <label>------------------------------------------------------------------------------------</label>
          </div>
          <div class="mb-3">
            <label>&copy; 2025 Random Shot. All Rights Reserved.</label>
          </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
