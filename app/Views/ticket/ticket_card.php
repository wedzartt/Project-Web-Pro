<!-- =========================
     TICKET SECTION
========================= -->

<section
    class="ticket-section"
    id="ticket">

    <div class="container">

        <!-- TITLE -->

        <h1 class="ticket-title">
            Festival Tickets
        </h1>

        <!-- WRAPPER -->

        <div class="ticket-wrapper">

            <!-- =========================
                 DAY 1 PASS
            ========================= -->

            <div class="ticket-card early-card">

                <!-- Badge -->

                <span class="ticket-badge soldout">
                    Available
                </span>

                <!-- Icon -->

                <div class="ticket-icon">
                    🎤
                </div>

                <!-- Date -->

                <div class="ticket-date">
                    24 JULY 2026
                </div>

                <!-- Ticket Name -->

                <h2 class="ticket-name">
                    DAY 1
                </h2>

                <!-- Price -->

                <div class="ticket-price">
                    <!-- START FROM <br> -->
                    Rp 350K
                </div>

                <!-- Benefit -->

                <ul class="ticket-benefit">

                    <li>
                        ✓ Access Day 1 Festival
                    </li>

                    <li>
                        ✓ Main Stage Access
                    </li>

                    <li>
                        ✓ Food & Tenant Area
                    </li>

                </ul>

                <!-- Button -->
                <!-- BISA DISABLE DENGAN CARA DIBAWAH INI -->
                <!-- class="ticket-btn disabled-btn" -->
                <!-- <a
                    href="#ticket-form"
                    class="ticket-btn disabled-btn">

                    Select Ticket

                </a> -->

                <a
                    href="<?= base_url('/ticket/checkout/1 '); ?>"
                    class="ticket-btn">

                    Select Ticket

                </a>

            </div>

            <!-- =========================
                 DAY 2 PASS
            ========================= -->

            <div class="ticket-card presale-card">

                <!-- Badge -->

                <span class="ticket-badge available">
                    AVAILABLE
                </span>

                <!-- Icon -->

                <div class="ticket-icon">
                    🍒
                </div>

                <!-- Date -->

                <div class="ticket-date">
                    25 JULY 2026
                </div>

                <!-- Ticket Name -->

                <h2 class="ticket-name">
                    DAY 2
                </h2>

                <!-- Price -->

                <div class="ticket-price">
                    <!-- START FROM <br> -->
                    Rp 550K
                </div>

                <!-- Benefit -->

                <ul class="ticket-benefit">

                    <li>
                        ✓ Access Day 2 Festival
                    </li>

                    <li>
                        ✓ Main Stage Access
                    </li>

                    <li>
                        ✓ Festival Merchandise
                    </li>

                </ul>

                <!-- Button -->

                <a
                    href="<?= base_url('/ticket/checkout/2'); ?>"
                    class="ticket-btn">

                    Select Ticket

                </a>

            </div>

            <!-- =========================
                 2 DAY PASS
            ========================= -->

            <div class="ticket-card regular-card featured-card">

                <!-- Badge -->

                <span class="ticket-badge comingsoon">
                    BEST VALUE
                </span>

                <!-- Icon -->

                <div class="ticket-icon">
                    🎟️
                </div>

                <!-- Date -->

                <div class="ticket-date">
                    24 - 25 JULY 2026
                </div>

                <!-- Ticket Name -->

                <h2 class="ticket-name">
                    2 DAY PASS
                </h2>

                <!-- Price -->

                <div class="ticket-price">
                    <!-- START FROM <br> -->
                    Rp 750K
                </div>

                <!-- Benefit -->

                <ul class="ticket-benefit">

                    <li>
                        ✓ Full 2 Day Festival Access
                    </li>

                    <li>
                        ✓ Main Stage & Art Area
                    </li>

                    <li>
                        ✓ Priority Entry Access
                    </li>

                </ul>

                <!-- Button -->

                <a
                    href="<?= base_url('/ticket/checkout/3'); ?>"
                    class="ticket-btn">

                    Select Ticket

                </a>

            </div>

        </div>

    </div>

</section>