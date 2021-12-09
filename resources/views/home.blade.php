<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVKS</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <script src="js/wow.min.js"></script>
    <script src="js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>

<header class="page-header" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-9">
                <a href="" class="logo">

                    @foreach($logotypes as $logotype)
                        <img src="{{$logotype->getImages()}}" alt="">
                    @endforeach
                </a>
            </div>
            <div class="col-lg-8 col-3">
                <ul class="header-nav">
                    @foreach($menus as $menu)
                        <li><a href="">{{ $menu->title }}</a></li>
                    @endforeach
                        @if(Auth::check())
                            <li><a href="/logout">Logout</a></li>
                        @else
                            <li><a href="/register">Register</a></li>
                            <li><a href="/login">Login</a></li>
                        @endif
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
        @foreach($headersections as $headersection)
        <div class="row align-items-end"  style="background-image:url({{$headersection->getImage()}});">
            <div class="col-12" >

                <div class="section-container">
                    <div class="article">
                        <h1 class="title">
                            {!!$headersection->title!!}
                        </h1>
                        <span class="sub-title"> {!!$headersection->subtitle!!}</span>
                    </div>
                    <a href="" class="link">mehr erfahren <i class="icon-right-arrow"></i></a>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</section>
@foreach($twosections as $twosection)
    @if($twosection->status == 1)
<section class="index-section2" >
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="{{$twosection->getImage()}}" alt="" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                </div>
            </div>
            <div class="col-lg-6">

                <div class="section-content">
                    <h2 class="section-title">  {!!$twosection->title!!}</h2>
                    <p class="text">{!!$twosection->content!!}</p>

                    <ul class="list">
                        <li>{!!$twosection->list!!}</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</section>
    @endif
@endforeach



<section class="index-section5">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section-title center">3 Schritte zu Ihrem vertrieblichen Bildungsabschluss:</h2>
            </div>
            @foreach($bloks as $blok)
                @if($blok->status == 1)
            <div class="col-md-4">
                <div class="item-wrap wow slideInUp" data-wow-duration="2s" data-wow-delay="0s">
                    <div class="icon">
                        <span class=""><a href=""> <img src="{{$blok->getImage()}}" alt=""></a></span>
                    </div>
                    <p class="text">{!!$blok->title!!}<small>
                            {!!$blok->text!!}</small>
                    </p>
                    <a href="" class="btn active">loslegen</a>
                </div>
            </div>
                @endif
            @endforeach

        </div>
    </div>
</section>



@foreach($recipients as $recipient)
@if($recipient->status == 1)
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrapper  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="contact-info">
                        <img src="{{$recipient->getImage()}}" alt="">
                        <div class="contact-block">
                            <p class="text">
                                {!!$recipient->name!!}
                            </p>
                            <a href="tel:4961044099846"><strong> {!!$recipient->number!!}</strong></a>
                        </div>
                    </div>

                    <form class="contact-form"  method="POST" action="{{route("contact_form_process")}}">
                        <h3 class="section-title"> {!!$recipient->title!!}</h3>
                        <p class="text">
                            {!!$recipient->subtitle!!}
                        </p>
                        @csrf
                        <div class="form_field"><input type="text" name="name" placeholder="Ihr Name"></div>
                        <div class="form_field"><input type="email" name="email" placeholder="Ihre E-Mail"></div>
                        <div class="form_field"><input type="text" name="phone" placeholder="Ihre Telefonnummer"></div>
                        <div class="form_field">
                            <textarea type="text" name="text" placeholder="Ihre Nachricht"></textarea>
                        </div>
                        <button class="btn active">Nachricht senden</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
@endforeach

<section class="index-section9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">Für Sie interessante Veranstaltungen</h2>
                <p class="text center subtitle wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    Trainings & Seminare
                </p>
                <div class="events_slider wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    @foreach($events as $event)
                    <div class="event_item">
                        <div class="event_item-wrapper">
                            <strong class="event_item-category"> {!!$event->event_category!!}</strong>
                            <p class="event_item-title">{!!$event->event_title!!}</p>
                            <p class="event_item-description">{!!$event->event_description!!}</p>
                            <div class="event_item-event-data">
                                <div class="icon-wrap">
                                    <span class="icon-calendar"></span>
                                </div>
                                <span class="text">{!!$event->date!!}</span>
                            </div>

                        </div>
                        <a href="" class="btn active">Weiterlesen</a>
                    </div>
                    @endforeach
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
                    @foreach($logotypes as $logotype)
                        <a href=""> <img src="{{$logotype->getImages()}}" alt=""></a>
                    @endforeach
                        @foreach($logotypes as $logotype)
                            <a href="">  <img src="{{$logotype->getImage()}}" alt=""></a>
                        @endforeach

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
                @foreach($contacts as $contact)
                <div class="text label">KONTAKT</div>
                <ul>
                    <li><a href="" class="text"> {!!$contact->title!!}</a></li>
                    <li><a href="" class="text">{!!$contact->subtitle!!}</a></li>
                    <li><a href="" class="text">{!!$contact->name!!}</a></li>
                    <li><a href="tel:4961044099846" class="text">{!!$contact->number!!}</a></li>
                    <li><a href="mailto:willkommen@verkaeuferschule.de" class="text">{!!$contact->email!!}</a></li>
                </ul>
                @endforeach
            </div>
            <div class="col-12">
                <div class="rights">
                    @foreach($logotypes as $logotype)
                        <div class="text">{{$logotype->copyright}}</div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
