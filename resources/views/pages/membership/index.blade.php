@extends('layouts.app')

@section('title', 'PAGASA | Membership')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/membership.css')}}">
@endsection

@section('content')
    @include('pages.membership.hero')
    @include('pages.membership.qualification')
    @include('pages.membership.steps')
    @include('pages.membership.downloadable')
@endsection

