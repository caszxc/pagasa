@extends('layouts.app')

@section('title', 'About Us | PAGASA MPC')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about_responsive.css')}}">
@endsection

@section('content')
    @include('pages.about.hero')
    @include('pages.about.history')
    @include('pages.about.awards')
    @include('pages.about.other_business')
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection