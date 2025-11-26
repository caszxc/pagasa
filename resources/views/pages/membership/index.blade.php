@extends('layouts.app')

@section('title', 'Membership | PAGASA MPC')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/membership.css')}}">
    <link rel="stylesheet" href="{{ asset('css/membership_responsive.css')}}">
@endsection

@section('content')
    @include('pages.membership.hero')
    @include('pages.membership.qualification')
    @include('pages.membership.steps')
    @include('pages.membership.downloadable')
@endsection

@section('scripts')
    <script src="{{ asset('js/membership.js') }}"></script>
@endsection

