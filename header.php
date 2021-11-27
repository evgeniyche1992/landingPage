<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo SITE_NAME?></title>
    <link rel="stylesheet" href="style/style.min.css" />
    <script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
</head>

<body class="mainBody">
    <div class="headers" id="laptop">
        <span class="sitename" id="head"><?php echo SITE_NAME?></span>
        <a class="language" id="ru" href="#">Ru</a>
        <a class="language" id="en" href="#">En</a>
        <span class="links">
            <a href="#main" class="one">Главная</a>
            <a href="#work" class="one">Работы</a>
            <a href="#contacts" class="one">Обратная связь</a>
            <a href="#about" class="one">О нас</a>
        </span>
    </div>

    <div class="headers" id="mobile">
        <span class="sitename" id="head"><?php echo SITE_NAME?></span>
        <span class="links">
            <div class="burger-menu">
                <input id="menu-toggle" type="checkbox" />
                <label class="menu-btn" for="menu-toggle">
                    <span></span>
                </label>
                <ul class="menubox">
                    <li><a href="#main" class="one">Главная</a></li>
                    <li><a href="#work" class="one">Работы</a></li>
                    <li><a href="#contacts" class="one">Обратная связь</a></li>
                    <li><a href="#about" class="one">О нас</a></li>
                </ul>
            </div>
        </span>
    </div>