<section
    class="purchase-section"
    id="ticket-form">

    <div class="container">

        <div class="purchase-box">

            <!-- TITLE -->

            <h2 class="purchase-title">
                TICKET PURCHASE
            </h2>

            <!-- =========================
                 TICKET TABLE
            ========================= -->

            <!-- BARU BUKA -->

            <!-- TABLE HEAD -->

            <div class="table-head">

                <span>ADMISSION</span>

                <span>PRICE</span>

                <span>QTY</span>

            </div>

            <!-- PENUTUP HEAD -->

            <div class="table-row">

                <!-- Ticket Name -->

                <span class="ticket-type">

                    <?= $ticket['ticket_type']; ?>

                </span>

                <!-- Ticket Price -->

                <span class="ticket-price">

                    Rp <?= number_format(
                            $ticket['price'],
                            0,
                            ',',
                            '.'
                        ); ?>

                </span>

                <!-- Quantity -->

                <div class="qty-box">

                    <!-- Minus -->

                    <button
                        type="button"
                        class="qty-btn minus">

                        -

                    </button>

                    <!-- Quantity Input -->

                    <input
                        type="text"
                        id="ticket-qty"
                        name="quantity"
                        value="1"
                        min="1"
                        readonly>

                    <!-- Plus -->

                    <button
                        type="button"
                        class="qty-btn plus">

                        +

                    </button>

                </div>

            </div>

            <!-- BARU SELESAI -->

            <!-- =========================
                 BILLING FORM
            ========================= -->

            <div class="billing-wrapper">

                <h3>
                    BILLING DETAILS
                </h3>

                <!-- FORM -->

                <form
                    action="<?= base_url('/payment'); ?>"
                    method="post">

                    <!-- Hidden Ticket -->
                    <input
                        type="hidden"
                        name="quantity"
                        id="hidden-qty"
                        value="1">

                    <input
                        type="hidden"
                        name="ticket_type"
                        value="<?= $ticket              ['ticket_type']; ?>">

                    <input
                        type="hidden"
                        name="ticket_price"
                        value="<?= $ticket
                        ['price']; ?>">
                    <!-- Hidden Ticket -->

                    <!-- Email -->
                    <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        required>

                    <!-- Full Name -->
                    <input
                        type="text"
                        name="fullname"
                        placeholder="Full Name"
                        required>

                    <!-- Phone -->
                    <input
                        type="text"
                        name="phone"
                        placeholder="Phone Number"
                        required>

                    <!-- Gender -->
                    <select
                        name="gender"
                        required>

                        <option value="Male">
                            Male
                        </option>

                        <option value="Female">
                            Female
                        </option>

                    </select>

                    <!-- Province -->
                    <input
                        type="text"
                        name="province"
                        placeholder="Province"
                        required>

                    <!-- Date Birth -->
                    <input
                        type="date"
                        name="birthdate"
                        required>

                    <!-- Submit -->

                    <button
                        class="checkout-btn"
                        type="submit">

                        CHECKOUT NOW

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>