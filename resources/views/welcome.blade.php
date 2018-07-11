<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.2.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.2.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/chrowork-1-128x128.png" type="image/x-icon">
  <meta name="description" content="welcome page">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
    
</head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse mbr-navbar--transparent" id="menu-3" data-rv-view="7">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="#">the chrowork</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                            @if (Auth::guest())
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ route('login') }}">LOGIN</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ route('register') }}">REGISTER</a></li>
                            @else
                                
                        
                               <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white"> {{ Auth::user()->name }}</a></li>
                               
                            </a>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                
                                </li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white">{{ \Carbon\Carbon::today()->formatLocalized('%A %d %B %Y') }}</a></li>
                             @endif
                            </ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-after-navbar" id="msg-box4-4" data-rv-view="9" style="background-color: rgb(61, 142, 185);">
    
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 93px; padding-bottom: 124px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size" style="width: 50%;">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width">
                        <img src="{{ asset('images/chrowork-1-500x500.png') }}" class="mbr-figure__img">
                    </figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">RESOURCE PLANNING&nbsp;</h3>
                            
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg"><p>Manage office resources more efficiently.</p></div>
                    </div>
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align btn-inverse">
                         @if (Auth::guest())
                            <a class="mbr-buttons__btn btn btn-lg btn-default" href="{{ route('login') }}">LOGIN</a>
                            <a class="mbr-buttons__btn btn btn-lg btn-default" href="{{ route('register') }}">REGISTER</a>
                         @else
                            <a class="mbr-buttons__btn btn btn-lg btn-default" href="{{ route('home') }}">DASHBOARD</a>
                         @endif

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-5" data-rv-view="12" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2018 Mitau.&nbsp;</p>
            </div>
        </div>
    </div>
</footer>


  <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('smooth-scroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('mobirise/js/script.js') }}"></script>
  
  
</body>
</html>