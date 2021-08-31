@extends('template')
@section('stylesheet'){{ mix('/css/person/app.css') }}@endsection
@section('script'){{ mix('/js/person/app.js') }}@endsection
@section('header')@include('component.header_dashboard')@endsection
@section('footer')@include('component.footer')@endsection
