<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun Random Shot</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/css_register.css') ?>" >
</head>
<body>
    <div>
        <form method="POST" action="<?php echo base_url().'auth/registration'; ?>" id="formulir">
            <img src="<?= base_url('assets/images/billLogin.png') ?>" width="40%" class="foto">
            <h1>Register</h1>
            <div>
                <input type="text" name="username" 
                placeholder="Username" class="resForm"
                value="<?= set_value('username'); ?>">
                <?php echo form_error('username', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <input type="email" name="email" 
                placeholder="Email" class="resForm"
                value="<?= set_value('email'); ?>">
                <?php echo form_error('email', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <input type="password" name="password" 
                placeholder="Password" class="resForm" 
                id="password">
            </div>
            <div>
                <input type="password" name="confirmPassword" 
                placeholder="Confirm Password" class="resForm" 
                id="konfirmpassword">
                <?php echo form_error('password', '<div class="error">', '</div>'); ?>
            </div>
            <div id="akun">
                already have an account? 
                <a href="<?= base_url('auth/login') ?>" id="login">
                    Login here
                </a> 
            </div>
            <button type="submit" id="register">Register</button>
        </form>
    </div>
</body>
</html>