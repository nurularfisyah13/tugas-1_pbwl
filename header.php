<?php
require_once "inc/Koneksi.php";
require_once "index.php";
?>
<div class="banner">
    <!-- Content -->
    <div class="content">
            <h1>WELCOME</h1>
            <h2>K-POP MUSIC</h2>
            <p>Music tempatnya anak k-pop. Keep Listen and Enjoy</p>
            <div>
                <button class="button" type="button"><a href="login.php" class="dropdown-link"><span></span></a>Get Started</button>
            </div>
        </div>
    </div>
    </header>

    <!-- Program -->
    <section class="program">
        <h1>Artist Channel</h1>

        <div class="row1">
            <div class="kotak-1">
                <img src="layouts/assets/img/blackpink-1.jpg">
                <h3>Blackpink</h3>
            </div>
            <div class="kotak-2">
                <img src="layouts/assets/img/bts-1.jpg">
                <h3>BTS</h3>
            </div>
            <div class="kotak-3">
                <img src="layouts/assets/img/red velvet-1.jpg">
                <h3>Red Velvet</h3>
            </div>
            <div class="kotak-4">
                <img src="layouts/assets/img/treasure-1.jpg">
                <h3>Treasure</h3>
            </div>
        </div>

        <div class="row1">
            <div class="kotak-1">
                <img src="layouts/assets/img/exo-1.jpg">
                <h3>EXO</h3>
            </div>
            <div class="kotak-2">
                <img src="layouts/assets/img/ikon-1.jpg">
                <h3>iKON</h3>
            </div>
            <div class="kotak-3">
                <img src="layouts/assets/img/wannaone-1.jpg">
                <h3>Wanna One</h3>
            </div>
            <div class="kotak-4">
                <img src="layouts/assets/img/got7-1.jpg">
                <h3>GOT7</h3>
            </div>
        </div>
    </section>


    <?php require_once "footer.php" ?>
</div>
</html>