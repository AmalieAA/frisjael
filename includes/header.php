<nav class="navbar navbar-expand-md bg-body-tertiary border-bottom border-borderfarve bg-baggrund">
    <div class="container-fluid container-xxl p-0">
        <a class="navbar-brand fs-6 me-0" href="index.php">
            <img class="m-2" id="Logo" src="images/Logo%20.webp" alt="Et billed af veteranhavens logo">
            <span class="d-md-none">Veteranhaven - Fri sjæl</span>
        </a>

        <button class="navbar-toggler px-2 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
            <div class="d-none d-md-block text-start w-100 m-2 border-bottom border-borderfarve">
                <h2>Veteranhaven - Fri sjæl</h2>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);

                $navigation_links = array(
                    'omos.php' => 'Om os',
                    'begivenheder.php' => 'Begivenheder',
                    'komiforløb.php' => 'Kom i forløb',
                    'blivfrivillig.php' => 'Bliv frivillig',
                    'samarbejde.php' => 'Samarbejde'
                );

                foreach ($navigation_links as $url => $text) {
                    $active_class = ($current_page === $url) ? 'active' : '';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link ' . $active_class . '" href="' . $url . '">' . $text . '</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
