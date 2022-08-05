<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?php echo site_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <link rel="shortcut icon" href="dist/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="dist/css/style.min.css?t=<?php echo time(); ?>" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,300;12..72,400;12..72,500;12..72,600;12..72,700;12..72,800;12..72,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <picture>
                <img src="dist/img/logo.png" alt="Logo">
            </picture>
        </div>
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">PLAYLIST</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">VIDEOS</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">SONG & LYRICS</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">ARTISTS</a>
                </li>
                <li class="header__nav-subcribe">
                    <button class="btn btn--second">
                        <a href="#">SUBCRIBE NEWLETTERS</a>
                    </button>
                </li>
            </ul>
        </nav>
        <div class="header__controls">
            <button class="header__languages">
                <ul class="header__languages-list">
                    <li>Arabic</li>
                    <li>Arabic</li>
                    <li>Arabic</li>
                    <li>Arabic</li>
                </ul>
            </button>
            <button class="header__search">
                <picture>
                    <img src="dist/img/header__search.svg" alt="">
                </picture>  
            </button>
            <div class="header__decor">
                <picture>
                    <img src="dist/img/footer__decor.svg" alt="">
                </picture>
            </div>
        </div>
    </header>

    <main id="main">