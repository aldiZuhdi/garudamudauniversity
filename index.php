<?php
include "public/cdn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Muda University | Home Page</title>
    <link rel="shortcut icon" href="public/assets/icons/logo-full-transparent.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/index-style.css">
    <?php echo styleCDN();?>
</head>
<body>
    <!-- header start -->
    <header>
        <nav>
            <div class="brand">
                <img class="brand-image" src="public/assets/icons/logo-vector-transparent.png" alt="Logo Garuda Muda University">
                <img class="brand-image" src="public/assets/icons/logo-text-transparent.png" alt="Logo Garuda Muda University">
            </div>
            <div id="navigation" class="navigation">
                <ul>
                    <a class="nav-link" href="">FACULTY</a>
                    <a class="nav-link" href="">ADMISSION</a>
                    <a class="nav-link" href="">FOR STUDENT</a>
                    <a class="nav-link" href="">ABOUT US</a>
                </ul>
                <div class="button-cta">
                    <a href="" class="btn">DAFTAR SEKARANG</a>
                </div>
            </div>
            <div id="toggleNavigation" class="toggle-navigation">
                <span class="toggle-span"></span>
                <span class="toggle-span"></span>
                <span class="toggle-span"></span>
            </div>
        </nav>
    </header>
    <!-- header end -->

    <script src="public/js/index-script.js"></script>
    <?php echo scriptCDN();?>
</body>
</html>