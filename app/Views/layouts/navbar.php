<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand logo-text" href="<?= base_url('/#home'); ?>">
            GENERASI MELODY
        </a>

        <!-- Hamburger Mobile -->
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active-link"
                        href="<?= base_url('/#home'); ?>">
                        HOME
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="<?= base_url('/ticket'); ?>">
                        TICKET
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" 
                     href="<?= base_url('/#lineup'); ?>">
                        LINE UP
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#footer">
                        ABOUT
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>