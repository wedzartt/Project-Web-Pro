<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/admin/admin.css') ?>">

</head>

<body>

    <div class="admin-wrapper">

        <!-- Sidebar -->
        <?= $this->include('admin/layouts/sidebar') ?>

        <div class="main-content">

            <!-- Navbar -->
            <?= $this->include('admin/layouts/navbar') ?>

            <!-- Content -->
            <div class="content-area">

                <?= $this->renderSection('content') ?>

            </div>

            <!-- Footer -->
            <?= $this->include('admin/layouts/footer') ?>

        </div>

    </div>

</body>

</html>