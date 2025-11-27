@extends('layouts.app')

@section('title', 'Services | PAGASA MPC')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css')}}">
    <link rel="stylesheet" href="{{ asset('css/services_responsive.css')}}">
    <link rel="preload" as="image" href="{{ asset('images/services/card-share-front.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/services/card-deposit-front.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/services/card-kiddie-front.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/services/card-time-front.jpg') }}">
@endsection

@section('content')
    @include('pages.services.hero')
    @include('pages.services.savings')
    @include('pages.services.loans')
    @include('pages.services.benefits')
    @include('pages.services.others')
@endsection

@section('scripts')
    <script src="{{ asset('js/services.js') }}"></script>
@endsection
