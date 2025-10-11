@extends('layouts.app')

@section('title', 'Services')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css')}}">
@endsection

@section('content')
    @include('pages.services.hero')
@endsection

@section('scripts')
    <script src="{{ asset('js/services.js') }}"></script>
@endsection
