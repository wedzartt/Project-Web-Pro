<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'WedzFest'; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Navbar CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/navbar.css'); ?>">

    <!-- Hero CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/hero.css'); ?>">

    <!-- Global dan Body Style CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/style.css'); ?>">

    <!-- Running Text CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/runningtext.css'); ?>">

    <!-- Footer CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/footer.css'); ?>">

    <!-- Ticket Card CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/ticket_card.css'); ?>">
    
    <!-- Ticket Form Ticket CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/css/ticket_form.css'); ?>">

    <!-- Google fonts -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"> -->

    <!-- Google fonts untuk footer (gambar instagram, youtube dkk)-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <?= $this->include('layouts/navbar'); ?>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <?= $this->include('layouts/footer'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>