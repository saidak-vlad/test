<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVKS</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>

<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-9">
                <a href="" class="logo">
                    <img src="../../../img/logo.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-3">
                <ul class="header-nav">
                    @foreach($menus as $menu)
                            <li><a href="">{{ $menu->title }}</a></li>
                    @endforeach
                </ul>
                <div class="burger-btn">
                    <span class="icon-menu-square-button"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu">
        <div class="icon-cross"></div>
    </div>
</header>

<section class="header-section wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

    <div class="container">
        <div class="row align-items-end">
            <div class="col-12">
                <div class="section-container">
                    <div class="article">
                        <h1 class="title">
                            Vertriebsleiter-
                            Ausbildung
                            IHK oder CEA`
                        </h1>
                        <span class="sub-title">Nutzen Sie Ihre Chance</span>
                    </div>
                    <a href="" class="link">mehr erfahren <i class="icon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="index-section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="../../../img/index-s2.jpg" alt="" class="wow zoomIn" data-wow-duration="1s"
                         data-wow-delay="0s">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <h2 class="section-title">Wo stehen Sie?</h2>
                    <p class="text">Der nächste Schritt in Ihrer Karriere ist eine Führungsposition im Vertrieb oder Sie
                        sind
                        bereits Vertriebsleiter und wollen einen qualifizierten Abschluss?</p>
                    <p class="text">
                        Ein erfolgreicher Vertrieb ist der Motor eines jeden Unternehmens. Als Vertriebsleiter bewegen
                        Sie sich jedoch oftmals auf dünnem Eis.
                    </p>
                    <ul class="list">
                        <li>Die nötige BWL-Grundlage fehlt</li>
                        <li>Führungskompetenzen fehlen</li>
                        <li>Unternehmerisches Denken muss gelernt werden</li>
                        <li>Austausch auf Augenhöhe unter Gleichgesinnten fehlt</li>
                        <li>Best-Practices zur Umsetzung im eigenen Unternehmen fehlen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index-section5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center">3 Schritte zu Ihrem vertrieblichen Bildungsabschluss:</h2>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_1"></span>
                    </div>
                    <p class="text">Beratungsgespräch</p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_2"></span>
                    </div>
                    <p class="text">Auswahl des geeigneten Kurses</p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="2s" data-wow-delay="0s">
                    <div class="icon">
                        <span class="icon-home_big_icon_3"></span>
                    </div>
                    <p class="text">Abschluss <small>
                            (IHK Zertifikat oder Personenzertifizierung DIN EN ISO/IEC 17024)</small>
                    </p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrapper  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="contact-info">
                        <img src="../../../img/contact.jpg" alt="">
                        <div class="contact-block">
                            <p class="text">
                                Klaus Schwarz freut sich auf Ihren Anruf unter Telefon:
                            </p>
                            <a href="tel:4961044099846"><strong>+49 6104 4099846</strong></a>
                        </div>
                    </div>
                    <form class="contact-form">
                        <h3 class="section-title">Nutzen Sie Ihre Chance!</h3>
                        <p class="text">
                            Wir helfen Ihnen gerne bei der Auswahl der für Sie passenden Weiterbildung.
                        </p>
                        <div class="form_field"><input type="text" name="name" placeholder="Ihr Name"></div>
                        <div class="form_field"><input type="email" name="email" placeholder="Ihre E-Mail"></div>
                        <div class="form_field"><input type="text" name="phone" placeholder="Ihre Telefonnummer"></div>
                        <div class="form_field">
                            <textarea name="message" placeholder="Ihre Nachricht"></textarea>
                        </div>
                        <button class="btn active">Nachricht senden</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="index-section9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">Für Sie
                    interessante Veranstaltungen</h2>
                <p class="text center subtitle wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    Trainings & Seminare
                </p>
                <div class="events_slider wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget,
                                placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget,
                                placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget,
                                placerat iaculis dolor.
                            </p>
                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget,
                                placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category">Seminare</strong>
                            <p class="event_item-title">Lorem ipsum dolor sit amet</p>
                            <p class="event_item-description">
                                Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget,
                                placerat iaculis dolor.
                            </p>

                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">01.12.2019</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-6 col-12 mob-col">
                <p class="text">
                    Die starke Kooperation in der Ausbildung
                    von Verkaufs- und Vertriebsleitern
                </p>
                <div class="logos-wrap">
                    <a href=""><img src="../../../img/footer-1.png" alt=""></a>
                    <a href=""><img src="../../../img/footer-2.png" alt=""></a>
                </div>
                <strong class="strong-text">NUTZEN SIE IHRE CHANCE!</strong>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                <div class="text label">Info</div>
                <ul>
                    <li><a href="" class="text">Kontakt </a></li>
                    <li><a href="" class="text">Impressum</a></li>
                    <li><a href="" class="text">Datenschutz</a></li>
                    <li><a href="" class="text">AGB</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                <div class="text label">WEITERBILDUNGSPROGRAMME</div>
                <ul>
                    <li><a href="" class="text">Vertriebsleiterausbildung (IHK) </a></li>
                    <li><a href="" class="text">Geprüfter Vertriebsleiter (CEA)</a></li>
                    <li><a href="" class="text">Trainer für betriebliche Weiterbildung (IHK)</a></li>
                    <li><a href="" class="text">Management- und Führungstrainer (IHK)</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="text label">KONTAKT</div>
                <ul>
                    <li><a href="" class="text">DVKS Deutsche Verkäuferschule® </a></li>
                    <li><a href="" class="text">Mehrhooger Straße 1c</a></li>
                    <li><a href="" class="text">D-46499 Hamminkeln</a></li>
                    <li><a href="tel:4961044099846" class="text">Fon: +49 6104 4099846</a></li>
                    <li><a href="mailto:willkommen@verkaeuferschule.de" class="text">willkommen@verkaeuferschule.de</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="rights">
                    <div class="text">© DVKS 2019. Alle Rechte vorbehalten.</div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
