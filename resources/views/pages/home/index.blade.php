@extends('layouts.app')

@section('title', 'Home | PAGASA MPC')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home_responsive.css')}}">
    <link rel="preload" as="image" href="{{ asset('images/home/savings.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/home/loans.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/home/benefits.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/home/others.jpg') }}">
@endsection

@section('content')
    @include('pages.home.hero')
    @include('pages.home.about')
    @include('pages.home.member_benefits')
    @include('pages.home.offers')
    @include('pages.home.cta')
    @include('pages.home.faq')
    @include('pages.home.affiliation')
@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
