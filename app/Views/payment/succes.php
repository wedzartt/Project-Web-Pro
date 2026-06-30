<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>

    <!-- Google fonts -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/succes_page.css') ?>">
</head>
<body>

<div class="success-container">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Payment Successful</h1>

        <p class="subtitle">
            Thank you for purchasing Generasi Melodi tickets.
        </p>

        <div class="divider"></div>

        <div class="info-row">
            <span>Order ID</span>
            <strong><?= $order['order_code']; ?></strong>
        </div>

        <div class="info-row">
            <span>Ticket Type</span>
            <strong><?= $order['ticket_type']; ?></strong>
        </div>

        <div class="info-row">
            <span>Quantity</span>
            <strong>x<?= $order['quantity']; ?></strong>
        </div>

        <div class="info-row">
            <span>Ticket Price</span>
            <strong>
                Rp <?= number_format($order['ticket_price'],0,',','.'); ?>
            </strong>
        </div>

        <div class="info-row total">
            <span>Total Payment</span>
            <strong>
                Rp <?= number_format($order['total_price'],0,',','.'); ?>
            </strong>
        </div>

        <div class="divider"></div>

        <h2>Buyer Information</h2>

        <div class="buyer-info">

            <p>
                <strong>Name</strong><br>
                <?= $order['fullname']; ?>
            </p>

            <p>
                <strong>Email</strong><br>
                <?= $order['email']; ?>
            </p>

            <p>
                <strong>Phone</strong><br>
                <?= $order['phone']; ?>
            </p>

            <p>
                <strong>Province</strong><br>
                <?= $order['province']; ?>
            </p>

        </div>

        <div class="ticket-box">

            <h3>🎫 E-Ticket</h3>

            <p>
                Your ticket has been recorded successfully.
            </p>

            <div class="qr-placeholder">
                QR CODE
            </div>

        </div>

        <div class="button-group">

            <a href="<?= base_url('/') ?>" class="home-btn">
                Back To Home
            </a>

            <button class="download-btn">
                Download Ticket
            </button>

        </div>

    </div>

</div>

</body>
</html>