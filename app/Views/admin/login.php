<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Generasi Melodi</title>

    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="<?= base_url('assets/css/admin/admin_login.css') ?>">

</head>

<body>

    <div class="login-wrapper">

        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>

        <div class="login-card">

            <div class="logo-area">

                <h1>
                    Generasi
                    <span>Melodi</span>
                </h1>

                <p>
                    Setiap generasi memiliki cerita, dan setiap cerita memiliki melodinya sendiri.
                </p>

            </div>

            <?php if (session()->getFlashdata('error')) : ?>

                <div class="alert-error">

                    <?= session()->getFlashdata('error') ?>

                </div>

            <?php endif; ?>

            <form action="<?= base_url('admin/login') ?>"
                method="post">

                <?= csrf_field() ?>

                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Masukkan username">

                </div>

                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password">

                </div>

                <button type="submit">

                    Login Admin

                </button>

            </form>

        </div>

    </div>

</body>

</html>