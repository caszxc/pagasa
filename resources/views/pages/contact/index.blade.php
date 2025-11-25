@extends('layouts.app')

@section('title', 'Contact Us | PAGASA MPC')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contact_responsive.css')}}">
@endsection

@section('content')
    @include('pages.contact.hero')
    @include('pages.contact.locations')
@endsection

@section('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
