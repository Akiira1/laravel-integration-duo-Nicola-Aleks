@extends('front.layouts.app')
@section('content')
    @include('front.partials.header')
    <canvas id="canvas" width="200" height="200"></canvas>
    @include('front.pages.banner')
    @include('front.pages.services')
    @include('front.pages.courses')
    @include('front.pages.50')
    @include('front.pages.testimonials')
    @include('front.pages.contact')
@endsection
