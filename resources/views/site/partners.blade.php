@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')

<main class="mp-main row">
    <div class="col-md-12 page-grid-block partners-page">

    @foreach($partners as $partner)
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="{{ $partner->url }}" class="page-grid-item-link">
                    <img src="{{ $partner->image }}" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="{{ $partner->url }}" class="page-grid-item-link">
                <h3 class="page-grid-heading">{{ $partner->title }}</h3>
            </a>
            <a href="{{ $partner->url }}" class="page-grid-item-link">
                <p class="page-grid-description">{{ $partner->description }}</p>
            </a>
        </div>
    @endforeach

        <!-- <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-2.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-3.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-1.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-4.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-5.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-6.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-7.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div>
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="###" class="page-grid-item-link">
                    <img src="/img/partner-8.png" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="###" class="page-grid-item-link">
                <h3 class="page-grid-heading">Cafe Letage & Bel etage</h3>
            </a>
            <a href="###" class="page-grid-item-link">
                <p class="page-grid-description">Идеальное место для вечеринок, банкетов и свадеб, деловых встреч
                </p>
            </a>
        </div> -->
    </div>
</main>

@endsection
