<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="login-container">
        <div id="login-wrapper">
            <h1>Login System</h1>
            <?php if(session()->getFlashdata('flash_msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
            <?php endif;?>
            
            <form action="" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>" required placeholder="Masukkan email...">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="Masukkan password...">
                </div>
                
                <button type="submit" class="btn-primary">Sign In</button>
            </form>
        </div>
        <p class="footer-text">&copy; 2026 - Universitas Pelita Bangsa</p>
    </div>
</body>
</html>