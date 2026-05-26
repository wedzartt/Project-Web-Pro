<div class="order-summary">

    <h2>
        ORDER SUMMARY
    </h2>

    <!-- EVENT CARD -->

    <div class="event-card">

        <img
            src="<?= base_url('assets/images/poster.jpg'); ?>"
            alt="Poster">

        <div class="event-info">

            <h3>
                PESTAPORA 2026
            </h3>

            <p>
                23 - 25 Januari 2026
            </p>

            <p>
                JIEXPO Kemayoran,
                Jakarta
            </p>

        </div>

    </div>

    <!-- TICKET DETAIL -->

    <div class="summary-detail">

        <div class="summary-row">

            <span>Tiket</span>

            <span>
                <?= $ticket_type ?? ''; ?>
            </span>

        </div>

        <div class="summary-row">

            <span>Quantity</span>

            <span>
                x<?= $quantity ?? ''; ?>
            </span>

        </div>

        <div class="summary-row">

            <span>Price</span>

            <span>
                Rp 550.000
            </span>

        </div>

        <div class="summary-row total">

            <span>Total</span>

            <span>

                Rp
                <?= number_format(
                    550000 * ($quantity ?? 1),
                    0,
                    ',',
                    '.'
                ); ?>

            </span>

        </div>

    </div>

    <!-- CUSTOMER -->

    <div class="customer-detail">

        <h3>
            Detail Pembeli
        </h3>

        <p>
            Nama : <?= $fullname ?? ''; ?>
        </p>

        <p>
            Email : <?= $email ?? ''; ?>
        </p>

        <p>
            Nomor Telepon : <?= $phone ?? ''; ?>
        </p>

        <p>
            Gender : <?= $gender ?? ''; ?>
        </p>

        <p>
            Provinsi : <?= $province ?? ''; ?>
        </p>

        <p>
            Tanggal Lahir : <?= $birthdate ?? ''; ?>
        </p>


    </div>

</div>