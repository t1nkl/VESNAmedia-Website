@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(5)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(5)->seo_description }}
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
@include('includes.breadcrumbs', ['crumbs' => ['Партнеры']])
<main class="mp-main row">
    <div class="col-md-12 page-grid-block partners-page">

    @foreach($partners as $partner)
        <div class="col-md-4 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="{{ $partner->url }}" target="_blank" class="page-grid-item-link">
                    <img src="{{ $partner->image }}" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="{{ $partner->url }}" target="_blank" class="page-grid-item-link">
                <h3 class="page-grid-heading">{{ $partner->title }}</h3>
            </a>
            <a href="{{ $partner->url }}" target="_blank" class="page-grid-item-link">
                <p class="page-grid-description">{{ $partner->description }}</p>
            </a>
        </div>
    @endforeach
    </div>
    
</main>

@endsection
