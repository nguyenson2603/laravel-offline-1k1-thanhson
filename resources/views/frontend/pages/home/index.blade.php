@extends('frontend.app')

@section('content')
    @include('frontend.pages.home.elements.slider')
    @include('frontend.pages.home.elements.collection-banner')
    {{-- @include('frontend.pages.home.elements.top-collection') --}}
    @include('frontend.pages.home.elements.top-collection-2')
    @include('frontend.pages.home.elements.product-trending')
    @include('frontend.pages.home.elements.two-banner')
    @include('frontend.pages.home.elements.product-slider')
    @include('frontend.pages.home.elements.service')
    @include('frontend.pages.home.elements.product-sale')
    @include('frontend.pages.home.elements.bottom-banner')
@endsection
