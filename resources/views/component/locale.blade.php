<nav class="uk-navbar-container uk-navbar-right">
    <ul class="uk-navbar-nav">
        <li class="uk-background-primary"><a href="#" uk-icon="icon: user"></a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Язык</a></li>
                    <li class="uk-nav-divider"></li>
                    @foreach(Config::get('app.available_locale') as $local)
                        <li><a href="{{ route(Route::currentRouteName(), $local) }}"><span class="uk-margin-small-right {{app()->getLocale() != $local?'':'uk-active'}}" uk-icon="icon: table"></span> {{$local}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>
</nav>
