<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse mbr-navbar--primary" id="menu-3" data-rv-view="7">
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
                                <li class="mbr-navbar__item"><a class="mbr-buttons__text btn text-white">{{ \Carbon\Carbon::today()->formatLocalized('%A %d %B %Y') }}</a></li>
                             @endif
                            </ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
                            
    <br><br>  <br><br>  <br><br>
