<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="css/index.css">
        <title> <?= $page_title ?> - Alience Production</title>
    </head>
    <body>
        <div class="mobile-menu">
            <ul class="mobile-menu-nav">
                <li class="mobile-menu-nav-item">
                    <a href="#" class="moble-menu-nav-link">О компании</a>
                </li>
                <li class="mobile-menu-nav-item">
                    <a href="#" class="moble-menu-nav-link">Контрактное производство</a>
                    <ul class="mobile-submenu">
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
                        </li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
                        </li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a></li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
                        </li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
                        </li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-menu-nav-item">
                    <a href="#" class="moble-menu-nav-link">Собственные торговые марки</a>
                    <ul class="mobile-submenu">
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
                        </li>
                        <li class="mobile-submenu-item">
                            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-menu-nav-item">
                    <a href="#" class="moble-menu-nav-link">Новости</a>
                </li>
                <li class="mobile-menu-nav-item">
                    <a href="#" class="moble-menu-nav-link">Контакты</a>
                </li>
            </ul>
            <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
            <div class="mobile-info">
                <svg class="adress">
                    <use href="icon/sprite.svg#adress"></use>
                </svg>
                <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
            </div>
            <div class="mobile-info">
                <svg class="mail">
                    <use href="icon/sprite.svg#mail"></use>
                </svg>
                <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
            </div>
            <div class="mobile-social">
                <a href="#" class="mobile-social-link">
                    <svg class="vk">
                    <use href="icon/sprite.svg#vk"></use>
                    </svg>
                </a>
                <a href="#" class="mobile-social-link">
                    <svg class="instagram">
                        <use href="icon/sprite.svg#instagram"></use>
                    </svg>
                </a>
            </div>
        </div>
        <!-- /.mobile-menu -->
        
        <nav class="navbar navbar-light">
            <a href="" class="mobile-menu-toggle">
                <span class="mobile-menu-line"></span>
                <span class="mobile-menu-line"></span>
                <span class="mobile-menu-line"></span>
            </a>
            <!-- /.mobile-menu-toggle -->
            <a href="./" class="header-logo">
                <svg class="logo-svg logo-light">
                    <use href="icon/sprite.svg#logo-light"></use>
                </svg>
                <svg class="logo-svg logo-black">
                    <use href="icon/sprite.svg#logo-black"></use>
                </svg>
            </a>
            <!-- /.header-logo -->
            <ul class="header-nav">
                <li class="header-nav-item">
                    <a href="/about.php" class="header-nav-link">О компании</a>
                </li>
                <li class="header-nav-item">
                    <a href="/contracts.php" class="header-nav-link">Контрактное производство</a>
                </li>
                <li class="header-nav-item">
                    <a href="/products_labels.php" class="header-nav-link">Собственные торговые марки</a>
                </li>
                <li class="header-nav-item">
                    <a href="/blog.php" class="header-nav-link">Новости</a>
                </li>
                <li class="header-nav-item">
                    <a href="#" class="header-nav-link">Контакты</a>
                </li>
            </ul>
            <!-- /.header-nav -->
            <div class="header-phone">
                <svg class="phone">
                    <use href="icon/sprite.svg#phone"></use>
                </svg>
                <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
            </div>
            <!-- /.header-phone -->
            <button class="header-button" data-toggle="modal" data-target="#feedback-modal">
                <svg class="header-button-icon">
                    <use href="icon/sprite.svg#phone"></use>
                </svg>
                <span class="header-button-text">
                    Получить консультацию
                </span>
            </button>
            <!-- /.header-button -->
        </nav>
        <!-- /.navbar -->
        
        <header class="header <?=$header_style?>">
            <div class="container">
                <div class="seporator"></div>
                <h1 class="header-inner-page-title"><?= $page_title ?></h1>
                <ol class="breadcrambs" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrambs-item" itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                        <a href="./" class="breadcrambs-link" itemprop="item">
                            <span itemprop="name">Главная</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrambs-item"
                    itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                        <a href="about.html" class="breadcrambs-link" itemprop="item">
                            <span itemprop="name"><?= $page_title ?></span>
                        </a>
                        <meta itemprop="item" content="./about.html" />
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
                <?php 
                if (!empty($Image_Bg)) {
                    echo '<img src="/image/avto-him.png" alt="avto-him" class="header-inner-page-image">';
                }
                ?>
            </div>
        </header>