@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection

@section('content')
    @include('pages.home.hero')
    @include('pages.home.about')
@endsection
