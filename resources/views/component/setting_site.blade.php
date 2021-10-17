<nav class="uk-navbar-container uk-navbar-right">
    <ul class="uk-navbar-nav">
        <li class=""><a href="#" uk-icon="icon: cog"></a>
            <div class="uk-navbar-dropdown uk-dropdown-small uk-navbar-dropdown-bottom-left">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Язык</a></li>
                    @foreach(Config::get('app.available_locale') as $appLocal)
                        <li><a href="{{ Route::currentRouteName() ? route(Route::currentRouteName(), $appLocal) : $appLocal }}"><span class="uk-margin-small-right {{app()->getLocale() != $appLocal?'':'uk-active'}}" uk-icon="icon: table"></span> {{$appLocal}}</a></li>
                    @endforeach
                    <li class="uk-nav-divider"></li>
                    <li class="uk-active"><a href="#">Тема</a></li>
                    <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: table"></span> светлая</a></li>
                    <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: table"></span> темная</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
