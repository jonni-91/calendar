@extends('public.app')

@section('content')
    @if($errors->any())
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body">
                    <ul class="uk-list uk-list-hyphen  uk-text-center  uk-animation-scale-up">
                    @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
	<div class="uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-overflow-hidden uk-light" data-uk-height-viewport>
		<!-- overlay -->
		<div class="uk-position-cover uk-overlay-primary"></div>
		<!-- /overlay -->
		<div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
			<span class="uk-text-small uk-text-muted">© 2020 Company Name - <a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a></span>
		</div>
		<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">

			<div class="uk-text-center uk-margin">
				<img src="img/login-logo.svg" alt="Logo">
			</div>

			<!-- login -->
			<form class="toggle-class" method="POST" action="{{ route('login', app()->getLocale()) }}">
                @csrf
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
                            <button id="toggle-login" class="uk-button uk-button-default" type="button" uk-toggle="target: .toggle-auth">
                                <p class="toggle-auth">use login</p>
                                <p class="toggle-auth" hidden>use phone</p>
                            </button>
                            <div class="toggle-auth">
                                <input id="phone" class="uk-input uk-border-pill @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required placeholder="{{__('auth.phone')}}"
                                       autocomplete="phone" autofocus type="phone">
                            </div>
                            <div class="toggle-auth" hidden>
                                <input id="login" class="uk-input uk-border-pill @error('login') is-invalid @enderror"
                                       name="login" value="{{ old('login') }}" placeholder="{{__('auth.your_login')}}"
                                       autocomplete="phone" autofocus type="login">
                            </div>


                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
							<input class="uk-input uk-border-pill @error('password') is-invalid @enderror"
                                   required placeholder="{{__('auth.password')}}" type="password"
                                   name="password" autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="uk-margin-small">
                        <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label for="remember">
                            {{ __('auth.keep_logged') }}
                        </label>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">{{ __('auth.log_in') }}</button>
					</div>
				</fieldset>
			</form>
			<!-- /login -->

			<!-- recover password -->
			<form class="toggle-class" method="POST" action="{{ route('password.request', app()->getLocale()) }}" hidden>
                @csrf
				<div class="uk-margin-small">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
						<input class="uk-input uk-border-pill" placeholder="{{__('title_email')}}" required type="email">
					</div>
				</div>
				<div class="uk-margin-bottom">
					<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">{{__('auth.send_password')}}</button>
				</div>
			</form>
			<!-- /recover password -->

			<!-- action buttons -->
			<div>
				<div class="uk-text-center">
                    @if (Route::has('password.request'))
					    <a class="uk-link-reset uk-text-small toggle-class"
                           data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade"
                           href="{{ route('password.request', app()->getLocale()) }}"
                        >
                            {{ __('auth.forgot_password') }}
                        </a>
                    @endif
                    <a class="uk-link-reset uk-text-small toggle-class"
                       data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden>
                        <span data-uk-icon="arrow-left"></span> {{__('auth.back_login')}}</a>
				</div>
			</div>
			<!-- action buttons -->
		</div>
	</div>
@endsection
