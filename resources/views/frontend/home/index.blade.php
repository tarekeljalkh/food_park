@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            Banner Slider START
        ==============================-->
    @include('frontend.home.components.slider')
    <!--=============================
            Banner Slider END
        ==============================-->


    <!--=============================
            WHY CHOOSE START
        ==============================-->
    @include('frontend.home.components.why-choose-us')
    <!--=============================
            WHY CHOOSE END
        ==============================-->


    <!--=============================
            OFFER ITEM START
        ==============================-->
    @include('frontend.home.components.offer-item')
    <!-- CART POPUP START -->
    @include('frontend.home.components.cart-popup')
    <!-- CART POPUP END -->
    <!--=============================
            OFFER ITEM END
        ==============================-->


    <!--=============================
            MENU ITEM START
        ==============================-->
    @include('frontend.home.components.menu-item')
    <!--=============================
            MENU ITEM END
        ==============================-->


    <!--=============================
            ADD ad SLIDER START
        ==============================-->
    @include('frontend.home.components.ad-slider')
    <!--=============================
            ADD ad SLIDER END
        ==============================-->


    <!--=============================
            TEAM START
        ==============================-->
    @include('frontend.home.components.team')
    <!--=============================
            TEAM END
        ==============================-->


    <!--=============================
            DOWNLOAD APP START
        ==============================-->
    @include('frontend.home.components.download-app')
    <!--=============================
            DOWNLOAD APP END
        ==============================-->


    <!--=============================
           TESTIMONIAL  START
        ==============================-->
    @include('frontend.home.components.testimonial')
    <!--=============================
            TESTIMONIAL END
        ==============================-->


    <!--=============================
            COUNTER START
        ==============================-->
    @include('frontend.home.components.counter')
    <!--=============================
            COUNTER END
        ==============================-->


    <!--=============================
            BLOG 2 START
        ==============================-->
    @include('frontend.home.components.blog')
    <!--=============================
            BLOG 2 END
        ==============================-->
@endsection
