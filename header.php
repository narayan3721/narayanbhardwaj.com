<!doctype HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Narayan Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <link rel="stylesheet" href="css/main-theme.min.css">
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <a class="header__logo" href="#">
                <svg width="55" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.03 43.15"><title>logo</title><text transform="translate(-0.16 34.46)" font-size="36" font-family="Lato-Medium, Lato" font-weight="500">N B</text><line x1="31.85" y1="1.9" x2="31.85" y2="39.9" stroke="#ff0" stroke-miterlimit="10" stroke-width="3"/></svg>
            </a>
            <input type="radio" id="navDrawer"  name="navmenu" class="inpRadio">
            <input type="radio" id="disableMenu" name="navmenu" class="inpRadio">
            <label for="navDrawer" class="header__navmenu" id="hammenu" onclick="navFixed();">
                <span class="icon nb-bars-solid"></span> Menu
            </label>
            <div class="layout-drawer">
                <label for="disableMenu" class="close-drawer" onclick="remFixed()">
                    <span class="icon nb-times-circle-regular"></span>
                </label>
                <div class="layout-drawer__userprofile">
                    <div class="img">
                        <img src="images/narayan-bhardwaj.jpeg">
                    </div>
                    <div class="userinfo">
                        <a href="mailto:ui.narayanbhardwaj@gmail.com">ui.narayanbhardwaj@gmail.com</a>
                    </div>
                </div>
                <nav class="navbar">
                    <a href="#">
                        <span class="icon nb-user-circle-regular"></span>
                        <span>About Me</span>
                    </a>
                    <a href="#">
                        <span class="icon nb-code-solid"></span>
                        <span>All Projects</span>
                    </a>
                    <a href="#">
                        <span class="icon nb-phone-alt-solid"></span>
                        <span>Contact</span>
                    </a>

                </nav>
                <div class="social">
                    <h5>Stay Connected with me</h5>
                    <ul class="social-links">
                        <li>
                            <a href="https://instagram.com/ui_narayan">
                                <span class="icon nb-instagram-brands"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/ui_narayan">
                                <span class="icon nb-linkedin-brands"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>