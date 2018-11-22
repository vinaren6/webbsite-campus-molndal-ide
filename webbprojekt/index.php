<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Campus Mölndal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/indexstyle.css">
    <script src="script/jquery-3.3.1.min.js"></script>
</head>
<body>
<nav class="navbar">
    <div class="mobile-logo"></div>
    <div class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </div>
    <ul id="js-navbar">
        <li><a href="#"><i class="far fa-compass icon"></i>Studie- och yrkesväglednig</a></li>
        <li><a href="#"><i class="fas fa-book icon"></i>Dina studier</a></li>
        <li><a href="#" class="desktop-logo"></a></li>
        <li><a href="#"><i class="far fa-building icon"></i>Företag och organisationer</a></li>
        <li><a href="#"><i class="fas fa-mobile-alt icon"></i>Kontakta oss</a></li>
    </ul>
</nav>
<section class="index-grid-container">
    <div class="grid-column-all top-image">
        <h3>Campus Mölndal</h3>
        <p>Campus Mölndal är en samlingsplats för all vuxenutbildning inom Mölndals stad. Hos oss kan du studera på alla nivåer - från kurser motsvarande grundskola, till eftergymnasial nivå i form av yrkeshögskola. Du kan också få råd, information och stöd i planering av dina studier av våra studie- och yrkesvägledare.</p>
    </div>
    <article class="grid-column-left">
        <h3>Utbildningar</h3>
    </article>
    <article class="grid-column-left">
        <a href="utbildningar.html">
        <div class="course-image course-img1">
        <h4>Yrkeshögskola</h4>
        <p>Eftergymnasiala och kvalificerade yrkesutbildningar utformade efter arbetsmarknadens behov.</p>
        </div>
        </a>
        <div class="read-more-button"><a href="utbildningar.html">Läs Mer</a></div>
    </article>
    <article class="grid-column-center">
        <div class="course-image course-img2">
        <h4>Företagsutbildningar</h4>
        <p>Skräddarsydda utbildningar för organisationer och företag.</p>
        </div>
            <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-right datum-desktop">
        <h3>Viktiga Datum</h3>
        <p class="index-year">2018:</p>
            <p>Yrkeshögskola ansök senast 26/11. - IT-projektledare <a href="">ansök och läs mer här.</a></p>
        <p class="index-year">2019:</p>
            <p>Terminstart 7/1-2019</p>
    </article>
    <article class="grid-column-left">
        <div class="course-image course-img3">
        <h4>Grundläggande vuxenutbildning</h4>
        <p>Kurser motsvarande grundskolenivå.</p>
        </div>
        <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-center">
        <div class="course-image course-img4">
        <h4>Gymnasial vuxenutbidlning</h4>
        <p>Kurser eller hel utbildning på gymnasial nivå.</p>
        </div>
        <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-left">
        <div class="course-image course-img5">
        <h4>Gymnasial yrkesutbildning</h4>
        <p>Utbildning mot arbete inom ett särskilt område.</p>
        </div>
        <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-center">
        <div class="course-image course-img6">
        <h4>Särskild utbildning för vuxna</h4>
        <p>För dig med kognitiv funktionsnedsättning eller förvärvad hjärnskada.</p>
        </div>
            <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-left">
        <div class="course-image course-img7">
        <h4>Distansutbildning</h4>
        <p>Gymnasiala kurser på distans.</p>
        </div>
        <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="grid-column-center">
        <div class="course-image course-img8">
        <h4>SFI - Svenska för invandrare</h4>
        <p>Grundläggande utbildning för invandrare i svenska.</p>
        </div>
            <div class="read-more-button"><a href="">Läs Mer</a></div>
    </article>
    <article class="datum-mobile">
        <h3>Viktiga Datum</h3>
        <p class="index-year">2018:</p>
        <p>Yrkeshögskola ansök senast 26/11. - IT-projektledare <a href="">ansök och läs mer här.</a></p>
        <p class="index-year">2019:</p>
        <p>Terminstart 7/1-2019</p>
    </article>
    <article class="grid-column-center-all">
        <h3>Nyheter</h3>
    </article>
    <!--
    <article class="grid-news-left">
        <img src="img/news1.jpg">
        <h4>Hur blir man en attraktiv arbetsgivare?</h4>
    </article>
    <article class="grid-news-center">
        <img src="img/news2.jpg">
        <h4>Hur funkar IT-projektledning inom offentliga sektorn?</h4>
    </article>
    <article class="grid-news-right">
        <img src="img/news3.jpg">
        <h4>Aktiveringspedagoger inom LSS genomför barnobservationer i utbildningssyfte</h4>
    </article>
    -->
    <?php
    include 'php/load_news.php';
    ?>
</section>
<footer class="footer">
    <ul>
        <h4>Kontakt</h4>
        <li class="footer-item"><a href="mailto:vagledning.campus@molndal.se"><i class="far fa-envelope"></i>Vägledning</a></li>
        <li class="footer-item"><a href="tel:031-315 10 14"><i class="fas fa-phone"></i>031-315 10 14</a></li>
        <li class="footer-item"><a href="https://www.facebook.com/campusmolndal/"><i class="fab fa-facebook-f"></i>Facebook</a> </li>
    </ul>
    <ul>
        <h4>Hitta oss</h4>
        <a href="https://www.google.se/maps/place/Campus+M%C3%B6lndal/@57.670819,12.0086165,15z/data=!4m2!3m1!1s0x0:0xae402e7a2c7e6dd4?ved=2ahUKEwjDn8qj4c7eAhWBxosKHQjzBfMQ_BIwCnoECAYQCA"><li class="footer-item">Krokslätts Fabriker 12A</li></a>
        <a href="https://www.google.se/maps/place/Campus+M%C3%B6lndal/@57.670819,12.0086165,15z/data=!4m2!3m1!1s0x0:0xae402e7a2c7e6dd4?ved=2ahUKEwjDn8qj4c7eAhWBxosKHQjzBfMQ_BIwCnoECAYQCA"><li class="footer-item">431 37</li></a>
        <a href="https://www.google.se/maps/place/Campus+M%C3%B6lndal/@57.670819,12.0086165,15z/data=!4m2!3m1!1s0x0:0xae402e7a2c7e6dd4?ved=2ahUKEwjDn8qj4c7eAhWBxosKHQjzBfMQ_BIwCnoECAYQCA"><li class="footer-item">Mölndal</li></a>
    </ul>
    <ul>
        <h4>Snabblänkar</h4>
        <a href="#"><li class="footer-item">Ansökan</li></a>
        <a href="https://campusmolndal.itslearning.com/"><li class="footer-item">Itslearning</li></a>
        <a href="#"><li class="footer-item">Felanmälan</li></a>
        <a href="https://www.molndal.se/startsida/kommun-och-politik/insyn-och-paverkan/synpunkter-och-felanmalan.html"><li class="footer-item">Lediga jobb</li></a>
    </ul>
</footer>
<script src="script/navbar-toggle.js"></script>
<script src="script/index.js"></script>
</body>
</html>