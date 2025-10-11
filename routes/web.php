<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home.index')->name('home');
Route::view('/services', 'pages.services.index')->name('services');
Route::view('/membership', 'pages.membership.index')->name('membership');
Route::view('/about-us', 'pages.about.index')->name('about');
Route::view('/contact-us', 'pages.contact.index')->name('contact');

