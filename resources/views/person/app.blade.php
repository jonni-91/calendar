@extends('template')
@section('stylesheet'){{ mix('/css/person/app.css') }}@endsection
@section('script'){{ mix('/js/person/app.js') }}@endsection
@section('config')@include('person.config')@endsection
@section('header')@include('component.header_person')@endsection
@section('footer')@include('component.footer')@endsection
