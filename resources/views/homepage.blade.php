@extends('partials.layouts.app')

@section('title', 'Homepage - Coffe App')

@section('content')

{{-- @dd($products) --}}
<!-- Hero Section -->
@include('partials.pages.homepage.hero')

<!-- Popular Product -->
@include('partials.pages.homepage.popular-product')

<!-- Services -->
@include('partials.pages.homepage.service')

<!-- About Us -->
@include('partials.pages.homepage.about-us')

<!-- Products -->
@include('partials.pages.homepage.product')

<!-- Testimonial -->
@include('partials.pages.homepage.testimonial')

<!-- Subsribe -->
@include('partials.pages.homepage.subscribe')

@endsection