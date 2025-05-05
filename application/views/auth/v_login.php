<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun Random Shot</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/css_auth.css') ?>" >
</head>
<body>
    <div>
        <form method="POST" action="<?php echo base_url().'auth/index'; ?>" id="login">
            <img src="<?= base_url('assets/images/billLogin.png') ?>" width="40%" class="foto">    
            <h1>Login</h1>
            <?= $this->session->flashdata('message'); ?>
            <div id="isiData">
                <div>
                    <input type="text" name="username" 
                    placeholder="Username" class="resForm"
                    value="<?= set_value('username'); ?>">
                    <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                </div>
                <div>
                    <input type="password" name="password" 
                    placeholder="Password" class="resForm" 
                    id="password">
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                </div>
                <div id="akun">
                    don't have an account? 
                    <a href="<?= base_url('auth/registration') ?>" id="directRegister">
                        Register here
                    </a> 
                </div>
                <button type="submit" id="buttonLogin">Login</button> <br>
            </div>
        </form>
    </div>
</body>
</html>