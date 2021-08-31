<div class="uk-background-primary" uk-navbar>

    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="/" title="UIkit на русском">
                    <span class="uk-margin-small-right uk-icon" data-uk-icon="icon: uikit; ratio: 2">
                        <svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="uikit">
                            <polygon points="14.4,3.1 11.3,5.1 15,7.3 15,12.9 10,15.7 5,12.9 5,8.5 2,6.8 2,14.8 9.9,19.5 18,14.8 18,5.3"></polygon>
                            <polygon points="9.8,4.2 6.7,2.4 9.8,0.4 12.9,2.3"></polygon>
                        </svg>
                    </span> UIkit
        </a>
        <a data-uk-tooltip="Поиск по сайту" class="uk-navbar-toggle uk-icon uk-search-icon" href="/search-results" data-uk-search-icon="" title="" aria-expanded="false">
            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="search-icon">
                <circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle>
                <path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path>
            </svg>
        </a>
    </div>
    <div class="uk-navbar-left">
        <a href="#" class="toggle" data-uk-toggle="target: .toggle; animation: uk-animation-fade">
                    <span data-uk-tooltip="Свернуть меню" class="uk-margin-small-right uk-icon" data-uk-icon="icon:chevron-double-left; ratio:2;" title="" aria-expanded="false">
                        <svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-double-left">
                            <polyline fill="none" stroke="#000" stroke-width="1.03" points="10 14 6 10 10 6"></polyline>
                            <polyline fill="none" stroke="#000" stroke-width="1.03" points="14 14 10 10 14 6"></polyline>
                        </svg>
                    </span>
        </a>
        <a href="#" hidden="" class="toggle" data-uk-toggle="target: .toggle; animation: uk-animation-fade;">
                    <span data-uk-tooltip="Показать меню" class="uk-margin-small-right uk-icon" data-uk-icon="icon: chevron-double-right; ratio:2;" title="" aria-expanded="false">
                        <svg width="40" height="40" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-double-right">
                            <polyline fill="none" stroke="#000" stroke-width="1.03" points="10 6 14 10 10 14"></polyline>
                            <polyline fill="none" stroke="#000" stroke-width="1.03" points="6 6 10 10 6 14"></polyline>
                        </svg>
                    </span>
        </a>
    </div>
    <div id="modal-full" class="uk-modal-full uk-modal" data-uk-modal="">
        <div class="uk-modal-dialog uk-overflow-auto uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport="">
            <button class="uk-modal-close-full uk-close-large uk-icon uk-close" type="button" data-uk-close="">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large">
                    <line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line>
                    <line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line>
                </svg>
            </button>
        </div>
    </div>
    <ul class="uk-navbar-nav uk-visible@m">
        <li class="uk-active">
            <a data-uk-toggle="target: #modal-text" title="uikit 3" href="#modal-text">
                            <span class="uk-icon" data-uk-icon="warning">
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="warning">
                                    <circle cx="10" cy="14" r="1"></circle>
                                    <circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"></circle>
                                    <path d="M10.97,7.72 C10.85,9.54 10.56,11.29 10.56,11.29 C10.51,11.87 10.27,12 9.99,12 C9.69,12 9.49,11.87 9.43,11.29 C9.43,11.29 9.16,9.54 9.03,7.72 C8.96,6.54 9.03,6 9.03,6 C9.03,5.45 9.46,5.02 9.99,5 C10.53,5.01 10.97,5.44 10.97,6 C10.97,6 11.04,6.54 10.97,7.72 L10.97,7.72 Z"></path>
                                </svg>
                            </span>
            </a>
        </li>
        <li class="uk-active"><a href="/introduction">Документация</a></li>
    </ul>

    <div class="uk-navbar-item uk-navbar-right">
        <div class="ui-text-right">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login', app()->getLocale()) }}"><span class="uk-margin-small-right" uk-icon="icon: sign-in"></span>{{ __('component.login') }}</a>
                @endif
                @if (Route::has('register'))
                    <a  href="{{ route('register', app()->getLocale()) }}">{{ __('component.register') }}</a>
                @endif
            @else
                <a href="/persons"> {{ Auth::user()->name }}</a>
                <a href="{{ route('logout', app()->getLocale()) }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('component.logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
    @include('component.locale')
</div>
