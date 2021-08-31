@extends('public.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth.verify_email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth.verify_email_message') }}
                        </div>
                    @endif

                    {{ __('auth.verify_email_link') }}
                    {{ __('auth.verify_email_resend') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend', app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('auth.verify_email_click') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
