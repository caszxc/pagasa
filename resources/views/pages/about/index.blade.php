@extends('layouts.app')

@section('title', 'PAGASA | About Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
@endsection

@section('content')
    @include('pages.about.hero')
    @include('pages.about.history')
    @include('pages.about.awards')
    @include('pages.about.other_business')
@endsection

