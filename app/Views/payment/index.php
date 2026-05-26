<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<section class="payment-section">

    <div class="container">

        <!-- TITLE -->

        <div class="payment-heading">

            <h1>
                PAYMENT
            </h1>

            <p>
                Silakan selesaikan pembayaran untuk memproses pemesanan tiket Anda.
            </p>

        </div>

        <!-- PAYMENT WRAPPER -->

        <div class="payment-wrapper">

            <!-- ORDER SUMMARY -->

            <?= $this->include('payment/order_summary'); ?>

            <!-- PAYMENT METHOD -->

            <?= $this->include('payment/method_payment'); ?>

        </div>

    </div>

</section>

<?= $this->endSection(); ?>