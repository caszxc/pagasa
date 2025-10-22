@extends('layouts.app')

@section('title', 'PAGASA | Contact Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
@endsection

@section('content')
    @include('pages.contact.hero')
@endsection

@section('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
