<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>


<!-- HERO SECTION -->
<section class="hero-festival" id="home">

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <!-- <div class="hero-badge">
            GENERASI MELODI FESTIVAL MUSIK 2026
        </div> -->

        <h1 class="hero-title">
            GENERASI
            <span>MELODI</span>
        </h1>

        <p class="hero-description">
            Setiap generasi memiliki cerita, dan setiap cerita memiliki melodinya sendiri.
        </p>

        <div class="hero-buttons">

            <a href="<?= base_url('/ticket'); ?>" class="btn-ticket">
                BUY TICKET
            </a>

            <a href="#lineup" class="btn-lineup">
                SEE LINEUP
            </a>

        </div>

        <!-- Floating Decorations -->

        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <!-- <div class="sun"></div> -->

    </div>

</section>


<!-- Running Text -->
<section class="running-text1">

    <div class="marquee">

        <div class="marquee-content">

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

        </div>

    </div>

</section>

<!-- /* =========================
ABOUT SECION FESTIVAL 1 (BODY 1)
========================= */ -->

<section class="about-festival" id="about">

    <div class="container">

        <div class="festival-box">

            <h2 class="festival-title">
                GENERASI MELODI
            </h2>

            <p class="festival-text">

                Generasi Melodi adalah festival musik yang mempertemukan berbagai cerita, suara, dan generasi dalam satu panggung.
                <!-- <br> -->
                Dari lirik yang menemani perjalanan hidup hingga lagu yang menjadi kenangan, Generasi Melodi hadir untuk merayakan musik Indonesia bersama.
                <!-- <br> -->
                Satu Generasi, Banyak Melodi.

            </p>

        </div>

    </div>

</section>

<!-- =========================
    ABOUT SECION FESTIVAL 1 (BODY 1)
========================= -->


<!-- Running Text -->
<section class="running-text2">

    <div class="marquee">

        <div class="marquee-content">

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

            <span>Genarasi Melodi</span>

            <span>Music Festival</span>

        </div>

    </div>

</section>


<!-- /* =========================
    SHAPE DRIVER
========================= */ -->
<!-- 
<div class="wave-divider">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path
            d="M0,64L80,58.7C160,53,320,43,480,53.3C640,64,800,96,960,101.3C1120,107,1280,85,1360,74.7L1440,64L1440,160L1360,160C1280,160,1120,160,960,160C800,160,640,160,480,160C320,160,160,160,80,160L0,160Z">
        </path>
    </svg>
</div> -->

<!-- /* =========================
    SHAPE DRIVER
========================= */

/* =========================
    LINEUP ARTIST (BODY 2)
========================= */ -->

<section class="lineup-section" id="lineup">

    <div class="container">

        <h2 class="section-heading">
            LINE UP
        </h2>

        <div class="artist-wrapper">

            <div class="artist-card">
                Hindia
            </div>

            <div class="artist-card">
                Reality Club
            </div>

            <div class="artist-card">
                The Adams
            </div>

            <div class="artist-card">
                Feast
            </div>

            <div class="artist-card">
                Nadin Amizah
            </div>

            <div class="artist-card">
                Bernadya
            </div>

            <div class="artist-card">
                The Panturas
            </div>

            <div class="artist-card">
                Sheila on 7
            </div>

            <div class="artist-card">
                Iwan Fals
            </div>

            <div class="artist-card">
                Dhyo Haw
            </div>

            <div class="artist-card">
                Ndx A.K.A
            </div>

            <div class="artist-card">
                Barasuara
            </div>

            <div class="artist-card">
                Fourtwnty
            </div>

        </div>

    </div>

</section>

<!-- /* =========================
LINEUP SELESAI (BODY 2)
========================= */ -->

<?= $this->endSection(); ?>