@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection

@section('content')
    @include('pages.home.hero')
    @include('pages.home.about')
    @include('pages.home.member_benefits')
    @include('pages.home.offers')
@endsection
