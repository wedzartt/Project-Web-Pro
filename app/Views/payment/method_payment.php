<div class="payment-method">

    <h2>
        PILIH METODE PEMBAYARAN
    </h2>

    <form
        action="<?= base_url('/payment/succes'); ?>"
        method="post">

        <!-- METHOD ITEM -->

        <label class="method-item">

            <input
                type="radio"
                name="payment_method"
                value="Bca">

            <span>
                BCA Virtual Account
            </span>

        </label>

        <label class="method-item">

            <input
                type="radio"
                name="payment_method"
                value="Dana">

            <span>
                DANA
            </span>

        </label>

        <label class="method-item">

            <input
                type="radio"
                name="payment_method"
                value="Gopay">

            <span>
                GOPAY
            </span>

        </label>

        <label class="method-item">

            <input
                type="radio"
                name="payment_method"
                value="Qris">

            <span>
                QRIS
            </span>

        </label>

        <!-- BUTTON -->

        <button
            class="pay-btn"
            type="submit">

            PAY NOW

        </button>

    </form>

</div>