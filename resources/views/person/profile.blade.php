@extends('person.app')
@section('head_title')Страница пользователя@endsection
@section('content')
    <div id="sc-page-content">
        <div id="sc-page-content">
            <div class="uk-flex uk-flex-center">
                <div class="uk-width-4-5@l">
                    <div data-uk-grid class="uk-grid uk-grid-stack">
                        <div class="uk-width-1-4@l uk-first-column">
                            <profile-component></profile-component>
                            <div class="uk-sticky-placeholder" hidden="" style="height: 311px; margin: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
