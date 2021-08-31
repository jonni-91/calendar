@extends('template')
@section('stylesheet'){{ mix('/css/public/app.css') }}@endsection
@section('script'){{ mix('/js/public/app.js') }}@endsection
@section('header')@include('component.header')@endsection
@section('footer')@include('component.footer')@endsection
