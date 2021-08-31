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
	<div class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
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
			<form class="toggle-class" method="POST" action="{{ route('login') }}">
                @csrf
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
							<input id="email" class="uk-input uk-border-pill @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required placeholder="E-mail"
                                   autocomplete="email" autofocus type="email">
                            @error('email')
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
                                   required placeholder="Password" type="password"
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
                            {{ __('Keep me logged in') }}
                        </label>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">LOG IN</button>
					</div>
				</fieldset>
			</form>
			<!-- /login -->

			<!-- recover password -->
			<form class="toggle-class" method="POST" action="{{ route('password.request') }}" hidden>
                @csrf
				<div class="uk-margin-small">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
						<input class="uk-input uk-border-pill" placeholder="E-mail" required type="email">
					</div>
				</div>
				<div class="uk-margin-bottom">
					<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">SEND PASSWORD</button>
				</div>
			</form>
			<!-- /recover password -->

			<!-- action buttons -->
			<div>
				<div class="uk-text-center">
                    @if (Route::has('password.request'))
					    <a class="uk-link-reset uk-text-small toggle-class"
                           data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade"
                           href="{{ route('password.request') }}"
                        >
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <a class="uk-link-reset uk-text-small toggle-class"
                       data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden>
                        <span data-uk-icon="arrow-left"></span> Back to Login</a>
				</div>
			</div>
			<!-- action buttons -->
		</div>
	</div>
@endsection
