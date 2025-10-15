@extends('layouts.app')

@section('title', 'PAGASA | About Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
@endsection

@section('content')
    @include('pages.About.hero')
@endsection

